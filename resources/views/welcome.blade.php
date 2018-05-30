
body {
	font-family: 'Open Sans', sans-serif;
}

form {
	max-width: 500px;
	margin: 0 auto;
}

button {
  color: #777;
	background: #fff;
  padding: 4px 12px 4px 12px;
  border: solid #777 2px;
	transition: all 0.3s ease-in-out;
  text-decoration: none;
}

button:hover {
	color: #000;
	border: solid #000 2px;
  text-decoration: none;
}

input, textarea {
	font-size: 0.8rem;
  border: 1px solid #ddd;
  background: #fff;
  padding: 0.5rem 0.7rem;
	margin: 5px 0;
  transition: all 0.3s ease-in-out;
  width: 100%;

}

input:focus, textarea:focus {
  border-color: #777;
  outline: none;
}

.portfolio-content {
	line-height: 2;
	color: #555;
}

.portfolio-content a {
	color: #333;
	text-decoration: none;
	border-bottom: 1px solid #bbb;
}

.portfolio-content a:hover {
	color: #000;
	text-decoration: none;
	border-bottom: 1px solid #555;
}

h1, h2, h3 {
	font-family: 'Crimson Text', sans-serif;
	letter-spacing: 1px;
	font-weight: 300;
	margin-bottom: 20px;
}

.navbar-brand {
	font-weight: 800;
	font-size: 1.5rem;
	letter-spacing: 0.5px;
}

.navbar {
	text-transform: uppercase;
}

.nav-item {
	font-size: 0.8rem;
	font-weight: 300;
	letter-spacing: 1.5px;
}

.navbar-toggler {
	border: 0;
}

.navbar-toggler-right {
	right: 0rem;
}

.portfolio-img {
	width: 100%;
	max-height: 250px;
	display: block;
	object-fit: cover;
}

.project-img {
	width: 100%;
	display: block;
	object-fit: cover;
}

/* Image Hover Effect */

.hovereffect {
	width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
}

.hovereffect .overlay {
	width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
}

.hovereffect .overlay-text {
	font-size: 1.3rem;
	font-family: 'Crimson Text', sans-serif;
	font-weight: 300;
	color: #000;
	left: 50%;
	position: absolute;
	top: 50%;
	width: 100%;
	-webkit-transform: translate(-50%,-50%);
	-ms-transform: translate(-50%,-50%);
	transform: translate(-50%,-50%);
	opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
}

.hovereffect:hover .overlay-text {
	opacity: 1;
  filter: alpha(opacity=100);
}

.hovereffect img {
  display: block;
  position: relative;
  max-width: none;
	width: 100%;
	height: 100%;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.hovereffect:hover img {
  opacity: 0;
  filter: alpha(opacity=0);
}
.page-nav {
	width: 50%;
	margin: 0 auto;
	text-align: center;
}
.page-nav a,span {
	font-size: 1.3rem;
	font-family: 'Crimson Text', sans-serif;
	font-weight: 300;
	margin: 0 10px;
	color: #000;
}
