import sqlite3

def create_database():
    # Connect to SQLite database (creates the database if it doesn't exist)
    conn = sqlite3.connect('vehicle_rent_form.db')

    # Create a cursor object to execute SQL commands
    cursor = conn.cursor()

    # Create a table for the vehicle rent form
    cursor.execute('''CREATE TABLE IF NOT EXISTS vehicle_rent (
                    id INTEGER PRIMARY KEY,
                    name TEXT,
                    license_no TEXT,
                    mobile_no TEXT,
                    mileage REAL,
                    rent_time TEXT,
                    location TEXT
                    )''')

    # Commit changes and close the connection
    conn.commit()
    conn.close()

def insert_rent_form(name, license_no, mobile_no, mileage, rent_time, location):
    # Connect to the database
    conn = sqlite3.connect('vehicle_rent_form.db')
    cursor = conn.cursor()

    # Insert the rent form data into the database
    cursor.execute("INSERT INTO vehicle_rent (name, license_no, mobile_no, mileage, rent_time, location) VALUES (?, ?, ?, ?, ?, ?)",
                   (name, license_no, mobile_no, mileage, rent_time, location))
    
    # Commit changes and close the connection
    conn.commit()
    conn.close()

def display_rent_form():
    # Connect to the database
    conn = sqlite3.connect('vehicle_rent_form.db')
    cursor = conn.cursor()

    # Query the database to retrieve all rent form data
    cursor.execute("SELECT * FROM vehicle_rent")
    rows = cursor.fetchall()

    if not rows:
        print("No rent form data found.")
    else:
        print("Rent form data:")
        for row in rows:
            print("ID:", row[0])
            print("Name:", row[1])
            print("License Number:", row[2])
            print("Mobile Number:", row[3])
            print("Mileage:", row[4])
            print("Rent Time:", row[5])
            print("Location:", row[6])
            print()

    # Close the connection
    conn.close()

def main():
    create_database()

    # Take user input for rent form
    name = input("Enter your name: ")
    license_no = input("Enter your license number: ")
    mobile_no = input("Enter your mobile number: ")
    mileage = float(input("Enter vehicle mileage: "))
    rent_time = input("Enter rent time: ")
    location = input("Enter location: ")

    # Insert the rent form data into the database
    insert_rent_form(name, license_no, mobile_no, mileage, rent_time, location)

    print("Rent form submitted successfully.")

    # Display the rent form data
    display_rent_form()

if __name__ == "__main__":
    main()
