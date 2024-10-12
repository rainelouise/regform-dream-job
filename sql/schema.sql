CREATE TABLE applicant_records (
    applicant_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    birthdate DATE,
    gender VARCHAR(50),
    phone_number VARCHAR(20),
    email VARCHAR(100),
    address TEXT,
    applied_position VARCHAR(100),
    programming_languages TEXT,
    current_employment_status VARCHAR(50),
    available_start_date DATE,
    working_experience TEXT,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
