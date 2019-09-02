import cv2
import numpy as np
fd=cv2.CascadeClassifier(r"C:\Users\Jaya\AppData\Local\Programs\Python\Python36\Lib\site-packages\cv2\data\haarcascade_frontalface_alt2.xml")
image1=cv2.imread(r"D:\Attendance_project\images\crowd4.jpeg")
rgb1 = cv2.cvtColor(image1, cv2.COLOR_BGR2RGB)
faces=fd.detectMultiScale(rgb1,scaleFactor=1.1,minNeighbors=1)
for(x,y,w,h)in faces:
    print(x,y,w,h)
    print(len(faces))
    cv2.rectangle(image1,(x,y),(x+w,y+h),(0,0,225),1)
    cv2.imshow(r"D:\Attendance_project\images\crowd.jpg",image1)







    
