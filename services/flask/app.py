from flask import Flask
import redis

app = Flask(__name__)
r = redis.Redis(host='redis', port=6379, decode_responses=True)

@app.route('/')
def index():
    return 'Hello, World!'

if __name__ == "__main__":
    app.run(host='0.0.0.0')
