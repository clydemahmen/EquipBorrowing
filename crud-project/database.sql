CREATE TABLE borrow_records (
    id INT AUTO_INCREMENT PRIMARY KEY,
    borrower_name VARCHAR(150) NOT NULL,
    borrower_id VARCHAR(50) NOT NULL,
    equipment_name VARCHAR(150) NOT NULL,
    quantity INT NOT NULL DEFAULT 1,
    borrow_date DATE NOT NULL,
    return_date DATE NOT NULL,
    status ENUM('Borrowed', 'Returned', 'Overdue') DEFAULT 'Borrowed',
    notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO borrow_records (borrower_name, borrower_id, equipment_name, quantity, borrow_date, return_date, status) VALUES
('Kenjie Corcega', '2023-00001', 'Laptop - Dell Inspiron', 1, '2024-01-10', '2024-01-15', 'Returned'),
('Sam Ceremonia', '2023-00002', 'Canon DSLR Camera', 1, '2024-01-12', '2024-01-14', 'Borrowed'),
('Clyde Del Valle', '2023-00003', 'Projector - Epson', 1, '2024-01-08', '2024-01-10', 'Overdue');
