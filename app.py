from flask import Flask, render_template

app = Flask(__name__, template_folder='templates')

# Sample data for the rent page
rent_data = [
    {
        "company_name": "Company A",
        "bike_name": "Bike 1",
        "price": "30rs per hour",
        "rating": 4.3,
        "image_url": "./Images/scooty1.webp"
    },
    {
        "company_name": "Company B",
        "bike_name": "Bike 2",
        "price": "40rs per hour",
        "rating": 4.5,
        "image_url": "./Images/scooty2.webp"
    }
]

# Sample data for the product page
product_data = {
    "company_name": "Company A",
    "bike_name": "Bike 1",
    "price": 30,
    "availability": {
        "start_day": "Monday",
        "end_day": "Friday"
    },
    "time_slot": {
        "start_time": "8:00 am",
        "end_time": "3:00 pm"
    },
    "location": "K.K.Wagh Institute of Engineering Education and Research, Panchavati, Nashik, 422207",
    "model": "Honda Hornet",
    "vehicle_no": "MH15 xxxx",
    "mileage": "50 kmpl",
    "power": "18.4 PS",
    "weight": "139 kg",
    "image_url": "./Images/scooty1.webp"
}

@app.route('/')
def index():
    return render_template('rent.html', rent_data=rent_data)

@app.route('/product')
def product():
    return render_template('rent_data.html', product_data=product_data)

if __name__ == '__main__':
    app.run(debug=True)
