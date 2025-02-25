FROM python:3.9-slim

WORKDIR /app

COPY app.py /app
RUN pip install flask redis

COPY . .

CMD ["python", "app.py"]
