from flask import Flask, render_template

app = Flask(__name__)

# Sample data for the rent page
rent_data = [
    {
        "company_name": "Company 1",
        "bike_name": "Bike name 1",
        "price": 30,
        "rating": 4.3,
        "image_url": "./Images/scooty1.webp"
    },
    {
        "company_name": "Company 2",
        "bike_name": "Bike name 2",
        "price": 35,
        "rating": 4.0,
        "image_url": "./Images/scooty2.webp"
    },
    {
        "company_name": "Company 3",
        "bike_name": "Bike name 3",
        "price": 30,
        "rating": 4.8,
        "image_url": "./Images/bike5.jpeg"
    },
    {
        "company_name": "Company 4",
        "bike_name": "Bike name 4",
        "price": 30,
        "rating": 3.9,
        "image_url": "./Images/car1.webp"
    }
]

# Sample data for the product page
product_data = {
    "company_name": "Company 1",
    "bike_name": "Bike name 1",
    "price": 50,
    "Availability": "Monday to Friday",
    "timeslot": "8:00 am to 3:00 pm",
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
    return render_template('product.html', product_data=product_data)

if __name__ == '__main__':
    app.run(debug=True)
