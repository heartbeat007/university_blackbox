<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="test.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<style type="text/css">
  

table {
  font-family: sans-serif;
  width: 100%;
  border-spacing: 0;
  border-collapse: separate;
  table-layout: fixed;
  margin-bottom: 50px;
}
table thead tr th {
  background: #626E7E;
  color: #d1d5db;
  padding: 0.5em;
  overflow: hidden;
}
table thead tr th:first-child {
  border-radius: 3px 0 0 0;
}
table thead tr th:last-child {
  border-radius: 0 3px  0 0;
}
table thead tr th .day {
  display: block;
  font-size: 1.2em;
  border-radius: 50%;
  width: 30px;
  height: 30px;
  margin: 0 auto 5px;
  padding: 5px;
  line-height: 1.8;
}
table thead tr th .day.active {
  background: #d1d5db;
  color: #626E7E;
}
table thead tr th .short {
  display: none;
}
table thead tr th i {
  vertical-align: middle;
  font-size: 2em;
}
table tbody tr {
  background: #d1d5db;
}
table tbody tr:nth-child(odd) {
  background: #c8cdd4;
}
table tbody tr:nth-child(4n+0) td {
  border-bottom: 1px solid #626E7E;
}
table tbody tr td {
  text-align: center;
  vertical-align: middle;
  border-left: 1px solid #626E7E;
  position: relative;
  height: 32px;
  cursor: pointer;
}
table tbody tr td:last-child {
  border-right: 1px solid #626E7E;
}
table tbody tr td.hour {
  font-size: 2em;
  padding: 0;
  color: #626E7E;
  background: #fff;
  border-bottom: 1px solid #626E7E;
  border-collapse: separate;
  min-width: 100px;
  cursor: default;
}
table tbody tr td.hour span {
  display: block;
}
@media (max-width: 60em) {
  table thead tr th .long {
    display: none;
  }
  table thead tr th .short {
    display: block;
  }
  table tbody tr td.hour span {
    transform: rotate(270deg);
    -webkit-transform: rotate(270deg);
    -moz-transform: rotate(270deg);
  }
}
@media (max-width: 27em) {
  table thead tr th {
    font-size: 65%;
  }
  table thead tr th .day {
    display: block;
    font-size: 1.2em;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    margin: 0 auto 5px;
    padding: 5px;
  }
  table thead tr th .day.active {
    background: #d1d5db;
    color: #626E7E;
  }
  table tbody tr td.hour {
    font-size: 1.7em;
  }
  table tbody tr td.hour span {
    transform: translateY(16px) rotate(270deg);
    -webkit-transform: translateY(16px) rotate(270deg);
    -moz-transform: translateY(16px) rotate(270deg);
  }
}


</style>
<center>
<div class="container">
<b><h1>Commerce Faculty</h1></b>
</center>
</div>
<table>
  <thead>
    <tr>
      <th></th>
      <th>
        <span class="day">1</span>
        <span class="long">Monday</span>
        <span class="short">Mon</span>
      </th>
      <th>
        <span class="day">2</span>
        <span class="long">Tuesday</span>
        <span class="short">Tue</span>
      </th>
      <th>
        <span class="day">3</span>
        <span class="long">Wendsday</span>
        <span class="short">We</span>
      </th>
      <th>
        <span class="day">4</span>
        <span class="long">Thursday</span>
        <span class="short">Thur</span>
      </th>
      <th>
        <span class="day active">5</span>
        <span class="long">Friday</span>
        <span class="short">Fri</span>
      </th>
      <th>
        <span class="day">6</span>
        <span class="long">Saturday</span>
        <span class="short">Sat</span>
      </th>
      <th>
        <span class="day">7</span>
        <span class="long">Sunday</span>
        <span class="short">Sun</span>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="hour" rowspan="4"><span>1:00</span></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="hour" rowspan="4"><span>2:00</span></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td class="hour" rowspan="4"><span>3:00</span></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="hour" rowspan="4"><span>4:00</span></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="hour" rowspan="4"><span>5:00</span></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="hour" rowspan="4"><span>6:00</span></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="hour" rowspan="4"><span>7:00</span></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="hour" rowspan="4"><span>8:00</span></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
</body>
</html>