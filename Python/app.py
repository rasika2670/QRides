import tkinter as tk
from tkinter import scrolledtext

def generate_html():
    # Retrieve the input values
    image = entry_image.get()
    company = entry_company.get()
    bike = entry_bike.get()
    price = entry_price.get()
    rating = entry_rating.get()
    availability = entry_availability.get()
    timeslot = entry_timeslot.get()
    location = entry_location.get()
    model = entry_model.get()
    vehicle_no = entry_vehicle_no.get()
    mileage = entry_mileage.get()
    power = entry_power.get()
    weight = entry_weight.get()

    # Generate the HTML card code
    html_code = f"""
<!-- Card -->
<div class="info cursor-pointer" 
     onclick="window.location.href = buildProductUrl({{
        image: '{image}',
        company: '{company}',
        bike: '{bike}',
        price: {price},
        rating: {rating},
        availability: '{availability}',
        timeslot: '{timeslot}',
        location: '{location}',
        model: '{model}',
        vehicle_no: '{vehicle_no}',
        mileage: '{mileage}',
        power: '{power}',
        weight: '{weight}'
    }});">
    <div class="img" style="background-image: url('{image}');"></div>
    <div class="content">
        <p class="company-name">{company}</p>
        <p class="bike-name">{bike}</p>
        <div class="flex justify-between">
            <p class="price" style="font-size: 0.8rem;">{price}rs per hour</p>
            <div class="pr">
                <i class="fa-solid fa-star" style="color: #22223b;"></i>
                <p class="rating">{rating}</p>
            </div>
        </div>
    </div>
</div>
"""
    # Insert the HTML code into the output field
    output_text.delete(1.0, tk.END)
    output_text.insert(tk.END, html_code)

# Create the main window
root = tk.Tk()
root.title("HTML Card Generator")

# Create and place the input fields and labels
labels = ["Image URL:", "Company Name:", "Bike Name:", "Price:", "Rating:", "Availability:", "Timeslot:", "Location:", "Model:", "Vehicle No:", "Mileage:", "Power:", "Weight:"]
entries = []

for i, label_text in enumerate(labels):
    label = tk.Label(root, text=label_text)
    label.grid(row=i, column=0, padx=10, pady=5, sticky=tk.W)
    entry = tk.Entry(root, width=50)
    entry.grid(row=i, column=1, padx=10, pady=5)
    entries.append(entry)

entry_image, entry_company, entry_bike, entry_price, entry_rating, entry_availability, entry_timeslot, entry_location, entry_model, entry_vehicle_no, entry_mileage, entry_power, entry_weight = entries

# Create and place the Generate button
generate_button = tk.Button(root, text="Generate HTML", command=generate_html)
generate_button.grid(row=len(labels), column=0, columnspan=2, pady=10)

# Create and place the output field
output_label = tk.Label(root, text="Generated HTML:")
output_label.grid(row=len(labels) + 1, column=0, padx=10, pady=5, sticky=tk.W)
output_text = scrolledtext.ScrolledText(root, width=80, height=15)
output_text.grid(row=len(labels) + 1, column=1, padx=10, pady=5)

# Start the main loop
root.mainloop()
