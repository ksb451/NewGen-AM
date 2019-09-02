#! /usr/bin/env python
import sys
import cv2
import numpy as np
import face_recognition as fc
#print("Hello World!")
#f=open("filename.txt","w+")

present=[]
for i in range(30):
    present.append(0)
    
n=0

image1=fc.load_image_file(r"/home/ksb4/test/newtry/images/images/iit2018029.jpg")
image2=fc.load_image_file(r"/home/ksb4/test/newtry/images/images/iit2018059.jpg")
image3=fc.load_image_file(r"/home/ksb4/test/newtry/images/images/iit2018016.jpg")
image4=fc.load_image_file(r"/home/ksb4/test/newtry/images/images/iit2018062.jpeg")
image5=fc.load_image_file(r"/home/ksb4/test/newtry/images/images/iec2018066.jpg")
image6=fc.load_image_file(r"/home/ksb4/test/newtry/images/images/iec2018043.jpg")
image7=fc.load_image_file(r"/home/ksb4/test/newtry/images/images/iec2018063.jpg")
image8=fc.load_image_file(r"/home/ksb4/test/newtry/images/images/iec2018047.jpeg")

e1=fc.face_encodings(image1)[0]
e2=fc.face_encodings(image2)[0]
e3=fc.face_encodings(image3)[0]
e4=fc.face_encodings(image4)[0]
e5=fc.face_encodings(image5)[0]
e6=fc.face_encodings(image6)[0]
e7=fc.face_encodings(image7)[0]
e8=fc.face_encodings(image8)[0]

stu=["iit2018029","iit2018059","iit2018016","iit2018062","iec2018066","iec2018043","iit2018063","iit2018047"]
encoding=[]
encoding.append(e1)
encoding.append(e2)
encoding.append(e3)
encoding.append(e4)
encoding.append(e5)
encoding.append(e6)
encoding.append(e7)
encoding.append(e8)

v=cv2.VideoCapture(0)
ret,live=v.read()
f=fc.face_locations(live)
if(len(f)>0):
    cv2.imshow("image",live)
    [x1,y1,x2,y2]=f[0]


#x=input("enter your rollno")
x=sys.argv[1]
#x="iec2018043"
n=0
c=0
while(n<13):
    n=n+1
    print(n)
    ret,live=v.read()
    if(ret==True):
        f1=fc.face_locations(live)
        if(len(f1)>0):
            [x1,y1,x2,y2]=f1[0]
            E=fc.face_encodings(live)[0]
            t=fc.compare_faces(encoding,E,0.4)
            cv2.rectangle(live,(y2,x1),(y1,x2),(0,0,225),1)
            cv2.imshow("image",live)
            print(t)
            if(t.count(True)!=0):
                if(t.index(True)==stu.index(x)):
                    cv2.putText(live,'present',(y2,x1), cv2.FONT_HERSHEY_SIMPLEX,0.7,(0,0,255),1,cv2.LINE_AA)
                    c=c+1 
                    print("hello")
                    print(c)
                else:
                    pass
            k=cv2.waitKey(5)
            if(k==ord('q')):
                cv2.destroyAllWindows()
                break
if(c>8):
    print("present")
else:
    print("absent")
         
