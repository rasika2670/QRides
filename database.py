from flask import Flask, render_template, request # type: ignore
import mysql.connector # type: ignore

app = Flask(__name__)

# Connect to MySQL
conn = mysql.connector.connect(
    host="localhost",
    user="your_username",
    password="your_password",
    database="your_database"
)
cursor = conn.cursor()

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/submit', methods=['POST'])
def submit():
    if request.method == 'POST':
        name = request.form['name']
        license_no = request.form['license_no']
        mobile_no = request.form['mobile_no']
        mileage = request.form['mileage']
        rent_time = request.form['rent_time']
        location = request.form['location']

        # Insert into MySQL database
        cursor.execute("INSERT INTO vehicle_rent (name, license_no, mobile_no, mileage, rent_time, location) VALUES (%s, %s, %s, %s, %s, %s)",
                       (name, license_no, mobile_no, mileage, rent_time, location))
        conn.commit()

        return 'Rent form submitted successfully.'

@app.route('/display')
def display():
    cursor.execute("SELECT * FROM vehicle_rent")
    rows = cursor.fetchall()
    return render_template('display.html', rows=rows)

if __name__ == '__main__':
    app.run(debug=True)
