-- Create a database table to track API method calls
CREATE TABLE api_method_calls (
    id INTEGER PRIMARY KEY AUTOINCREMENT,  -- Unique identifier for each record
    ip TEXT NOT NULL,                      -- IP address of the requester
    date_time DATETIME DEFAULT CURRENT_TIMESTAMP,  -- Date and time of the call, defaults to current
    method_called TEXT NOT NULL            -- The name of the API method called
);
