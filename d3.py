#!/usr/bin/python3

"""
Fall 2017 CSc 690 

File: Test phone
goal is to create our phone app.  This is just the backbone
Author: Andrew Streckfus
Last edited: 10.24.17
"""

import sys
from PyQt5.QtWidgets import QApplication, QWidget, QLabel
from PyQt5.QtGui import QPixmap
from PyQt5.QtCore import Qt
 
class Window(QWidget):
 
    def __init__(self):
        super().__init__()
        self.title = 'PyQt5 image display'
        self.initUI()
 
    def initUI(self):
        self.setWindowTitle(self.title)
        self.setGeometry(100, 100, 450 , 800)
        self.setStyleSheet("background-color: green")
 
        # Create a label
        label = QLabel(self)
        label.resize(450, 200)
        label.move(0, 600)
        label.setText("D3")
        label.setStyleSheet("font: bold 50px; background-color: black; color: blue;")
        label.setAlignment(Qt.AlignCenter)
        # load image from file
        #pixmap = QPixmap()
        # attach image to label
        #label.setPixmap(pixmap)
        self.show()
 
if __name__ == '__main__':
    app = QApplication(sys.argv)
    window = Window()
    sys.exit(app.exec_())
