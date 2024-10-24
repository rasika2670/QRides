
from flask import Flask, render_template

app = Flask(__name__)


@app.route('/')
def index():
    return render_template('index.html')  
"""
@app.route('/home')
def home():
    return render_template('home.html')

@app.route("/navig")
def navig():
    return render_template('navig.html') 

@app.route("/help")
def help():
    return render_template('help.html')

@app.route("/login")
def login():
    return render_template('login.html') 

@app.route('/rent')
def rent():
    return render_template('rent.html')


@app.route("/booking")
def booking():
    return render_template('booking.html') 

@app.route("/customerdetails")
def customerdetails():
    return render_template('customerdetails.html') 

@app.route("/edit")
def edit():
    return render_template('edit.html')

@app.route("/Lend")
def Lend():
    return render_template('Lend.html')

@app.route("/owner")
def owner():
    return render_template('owner.html')

@app.route("/page4")
def page4():
    return render_template('page4.html')

@app.route("/payment")
def payment():
    return render_template('payment.html')

@app.route("/product")
def product():
    return render_template('product.html')

@app.route("/rent")
def rent():
    return render_template('rent.html')

@app.route("/thankyou")
def thankyou():
    return render_template('thankyou.html')

@app.route("/tp")
def tp():
    return render_template('tp.html')

@app.route("upload")
def upload():
    return render_template('upload.html')
"""


if __name__ == '__main__':
    app.run(debug=True)

