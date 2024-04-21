# Try laravel reverb for websocket


# User

- id
- name
- email
- phone_number - username


# Chats

- id (Primary Key)
- created_at
- updated_at

# Messages

- id (Primary Key)
- chat_id (Foreign Key from Chats)
- user_id (Foreign Key from Users, indicating who sent the message)
- message
- status (e.g., sent, delivered, seen)
- created_at
- updated_at

# Participants
- id (Primary Key)
- chat_id (Foreign Key from Chats)
- user_id (Foreign Key from Users)
- last_read_at (Timestamp of the last message read by the user)
- created_at
- updated_at
