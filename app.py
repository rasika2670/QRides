from flask import Flask, render_template, request, redirect, url_for
import sqlite3

app = Flask(__name__)

# Database initialization
def init_db():
    conn = sqlite3.connect('database.db')
    c = conn.cursor()
    c.execute('''
        CREATE TABLE IF NOT EXISTS vehicles (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            company_name TEXT,
            bike_name TEXT,
            mileage INTEGER,
            owner_name TEXT,
            owner_license INTEGER,
            from_time TEXT,
            to_time TEXT,
            vehicle_no TEXT,
            phone INTEGER,
            email TEXT,
            address TEXT,
            image1 BLOB,
            image2 BLOB
        )
    ''')
    conn.commit()
    conn.close()

# Route for the lend form
@app.route('/lend', methods=['GET', 'POST'])
def lend():
    if request.method == 'POST':
        company_name = request.form['company_name']
        bike_name = request.form['bike_name']
        mileage = request.form['mileage']
        owner_name = request.form['owner_name']
        owner_license = request.form['owner_license']
        from_time = request.form['from_time']
        to_time = request.form['to_time']
        vehicle_no = request.form['vehicle_no']
        phone = request.form['phone']
        email = request.form['email']
        address = request.form['address']
        image1 = request.files['image1'].read()
        image2 = request.files['image2'].read()

        conn = sqlite3.connect('database.db')
        c = conn.cursor()
        c.execute('''
            INSERT INTO vehicles (company_name, bike_name, mileage, owner_name, owner_license, from_time, to_time, vehicle_no, phone, email, address, image1, image2)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ''', (company_name, bike_name, mileage, owner_name, owner_license, from_time, to_time, vehicle_no, phone, email, address, image1, image2))
        conn.commit()
        conn.close()
        
        return redirect(url_for('rent'))

    return render_template('lend.html')

# Route for the rent page
@app.route('/rent')
def rent():
    conn = sqlite3.connect('database.db')
    c = conn.cursor()
    c.execute('SELECT * FROM vehicles')
    rent_data = c.fetchall()
    conn.close()

    return render_template('rent.html', rent_data=rent_data)

# Route for the thank you page
@app.route('/thankyou')
def thankyou():
    return render_template('thankyou.html')

if __name__ == '__main__':
    init_db()
    app.run(debug=True)
