# $ python3.6 judgeNum.py num.jpg
# 手書きの数字ファイルを選ばせる
from __future__ import print_function
import keras
from keras.datasets import mnist
from keras.models import Sequential
from keras.layers import Dense, Dropout, Flatten
from keras.layers import Conv2D, MaxPooling2D
from keras import backend as K
from keras.models import model_from_json
import numpy as np
import cv2
import sys

#保存したモデルの読み込み
model = model_from_json(open('./mnist_predict.json').read())
#保存した重みの読み込み
model.load_weights('./mnist_predict.hdf5')

# input image dimensions
num_classes = 10
img_rows, img_cols = 28, 28

# 画像の読み込みと縮小
# https://stackoverflow.com/questions/48121916/numpy-resize-rescale-image
args = sys.argv
img_path = args[1]
img = cv2.imread(img_path, cv2.IMREAD_GRAYSCALE)
x = cv2.resize(img, dsize=(img_rows, img_cols), interpolation=cv2.INTER_AREA  ) 
# 検証用
# cv2.imwrite("revert-"+img_path, x)

# グレースケースを0以上1以下に変換
x = x.astype('float32')
x /= 255

# 軸を増やす
x = np.expand_dims(x, axis=0)
x = np.expand_dims(x, axis=3)

#予測
features = model.predict(x)

#予測結果
message = "Your writing number is: " + str(np.argmax(features))
print(message)
print("probability: " + str(np.max(features)*100) + " %")
print("Number : Probability")
for num, prob in enumerate(features[0]):
  print(str(num) + " : " + str(prob*100) + " %" )
