--
-- File generated with SQLiteStudio v3.3.3 on Tue Aug 9 14:34:26 2022
--
-- Text encoding used: System
--
PRAGMA foreign_keys = off;
BEGIN TRANSACTION;

-- Table: Shoes
CREATE TABLE Shoes (ShoeID INTEGER PRIMARY KEY UNIQUE NOT NULL, Name CHAR NOT NULL, Size INTEGER NOT NULL, Price DECIMAL NOT NULL, CreatedTimestamp DATETIME NOT NULL, AmendedTimestamp DATETIME NOT NULL);

-- Table: Users
CREATE TABLE Users (OrderID INTEGER NOT NULL UNIQUE PRIMARY KEY, UserID INTEGER UNIQUE NOT NULL, Quantity INTEGER NOT NULL, CreatedTimestamp DATETIME NOT NULL, AmendedTimestamp DATETIME NOT NULL);

COMMIT TRANSACTION;
PRAGMA foreign_keys = on;
