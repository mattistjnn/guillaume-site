import requests

n = 0
while True:
    n+=1
    response =  requests.get("https://camo.githubusercontent.com/114db8757c046d70a6cffe9e09ec702f6f1ceb0a703566aeeaa6cc6dc8f02c83/68747470733a2f2f70726f66696c652d636f756e7465722e676c697463682e6d652f47756967677a7a2f636f756e742e737667")
    print(n)