import json
from bson import json_util
from pymongo import MongoClient

# Connection URL
url = 'mongodb://localhost:27017/'

# Database Name
db_name = 'proyectp'

# Collection Name
collection_name = 'restaurantes'

# Create a MongoClient object
client = MongoClient(url)

# Connect to the database
db = client[db_name]

# Get the collection
collection = db[collection_name]

# Find all documents in the collection, excluding the _id field
documents = collection.find({}, {'nombre': 1, 'mesas': 1, '_id': 0})

# Write the documents to a JSON file
with open('data.json', 'w') as file:
    for document in documents:
        # Convert the document to JSON using json_util.dumps()
        json_document = json_util.dumps(document)
        # Write the JSON document to the file
        file.write(json_document)

# Close the connection to the database
client.close()
