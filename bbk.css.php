<style>
@import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap");

* {
  box-sizing: border-box;
}

body {
  font-family: "Lato", sans-serif;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background-color: #000000;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='12' viewBox='0 0 20 12'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='charlie-brown' fill='%23434343' fill-opacity='0.4'%3E%3Cpath d='M9.8 12L0 2.2V.8l10 10 10-10v1.4L10.2 12h-.4zm-4 0L0 6.2V4.8L7.2 12H5.8zm8.4 0L20 6.2V4.8L12.8 12h1.4zM9.8 0l.2.2.2-.2h-.4zm-4 0L10 4.2 14.2 0h-1.4L10 2.8 7.2 0H5.8z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  text-align: center;
}

h2 {
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 1);
  color: #fff;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-align: center;
}

.chat-container {
  background: #ece9e6;
  background: linear-gradient(to right, #ece9e6, #ffffff);
  width: 320px;
  max-width: 100%;
  border-radius: 25px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26);
  overflow: hidden;
  padding: 15px;
  position: relative;
}

.chat {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.message {
  border-radius: 50px;
  position: relative;
  margin-bottom: 30px;
}

.message.left {
  padding: 15px 20px 15px 70px;
  background-color: #fff;
  border: 2px solid #cccccc;
  text-align: left;
}

.message.right {
  align-self: flex-end;
  padding: 15px 70px 15px 20px;
  background-color: #4b802f;
  color: #fff;
  text-align: right;
}

.avatar {
  border-radius: 50%;
  object-fit: cover;
  position: absolute;
  left: 10px;
  top: -10px;
  width: 50px;
  height: 50px;
  border: 2px solid #b8c4cc;
}

.message.right .avatar {
  left: auto;
  right: 10px;
  border-color: #5c8049;
}

.message p {
  margin: 0;
}

.text_input {
  font-size: 1rem;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 10px 15px;
  width: 100%;
}
  </style>