from flask import Flask, render_template, redirect, url_for

app = Flask(__name__)

@app.route('/')
def home():
    return render_template('home.html')

@app.route('/signup')
def signup():
    return render_template('signup.html')

@app.route('/get-started')
def get_started():
    return redirect(url_for('signup'))

if __name__ == '__main__':
    app.run(debug=True)