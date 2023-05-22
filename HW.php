<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="LinkStyle.css">

  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">


  <style>
    table{
      background-color: grey;
    }
    caption,
    th,
    td {
      border: 2px solid black;
      border-collapse: collapse;
    }
  </style>

  <style>
    .city{
      background-color: tomato;
      color: white;
      border: 2px solid black;
      margin: 20px;
      padding: 20px;
    }
  </style>

  <style>
    .note{
      font-size: 120%;
      color: red;
    }
  </style>

  <style>
    #myHeader{
      background-color: lightblue;
      color: black;
      padding: 40px;
      text-align: center;
    }

    .city{
      background-color: tomato;
      color: white;
      padding: 10px;
    }
  </style>


</head>
<body style="background-color:white;">
<h1 style="color: red">Link to another site</h1>
<a href="http://w3schools.com" target="_blank" rel="external">Link to w3school.com</a>
<hr>
<h1 style="color: red">Link to an anchor</h1>
<h2 id="Topic1" style="color: aqua">First topic</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, saepe.</p>
<h2 id="Topic2" style="color: aqua">Second topic</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, necessitatibus.</p>
<hr>
<h1 style="color: red">Table of contents</h1>
<a href="#Topic1">Click to jump to the First topic</a>
<br>
<hr>
<a href="#Topic2">Click to jump to the Second topic</a>
<br>
<hr>
<h1 style="color: red">Link to a page on the same site</h1>
<a href="https://www.w3schools.com/html/default.asp"target="_blank">
  w3 schools HTML tutorials</a>
<hr>
<br>
<h1 style="color: red">Link that dials a number</h1>
<a href="tel:123456789"target="_blank">Call us</a>
<br>
<hr>
<h1 style="color: red">Link that runs JavaScript</h1>
<a href="javascript:void(0);" onclick="alert("Hello Everyone!!");">Run Code</a>
<br>
<hr>
<h1 style="color: red">Link that runs email client</h1>
<a href="mailto:2010205614@ogrenci.karabuk.edu.tr" target="_blank">Send email</a>
<hr>
<h1 style="color: red">Lists</h1>
<h2 style="color: aqua">Ordered List</h2>

<ol>
  <li>Yahya</li>
  <li>Bora</li>
  <li>Yusuf</li>
</ol>
<hr>
<h2 style="color: aqua">Manually changing the numbers</h2>

<ol start="3">
  <li>Kadir</li>
  <li>Bilal</li>
  <li>Enes</li>
</ol>
<hr>
<br>

<ol start="5">
  <li>Item</li>
  <li>Some other item</li>
  <li value="4">A Reset Item</li>
  <li>Another Item</li>
  <li>Yet Another Item</li>
</ol>
<hr>
<h1 style="color: red">Unordered List</h1>
<ul>
  <li>Item</li>
  <li>Another Item</li>
  <li>Yet Another Item</li>
</ul>
<hr>
<h1 style="color: red">Nested lists</h1>

<ul>
  <li>Item 1</li>
  <li>Item 2
    <ul>
      <li>Sub-Item 2.1</li>
      <li>Sub-Item 2.2</li>
    </ul>
  </li>
   <li>Item 3</li>
</ul>
<hr>
<h1 style="color: red">Description List</h1>

<dl>
  <dt>Name 1</dt>
  <dd> Value of 1</dd>
  <dt>Name 2</dt>
  <dd>Value of 2</dd>
</dl>
<br>
<hr>
<dl>
  <dt>Name 1</dt>
  <dt>Name 2</dt>
  <dd>Value for 1 and 2</dd>
  <dt>Name 3</dt>
  <dd>Value of 3</dd>
  <dd>Value of 3</dd>
</dl>
<hr>

  <h1 style="color: red">Tables</h1>
  <h3 style="color: aqua">Simple Table</h3>

    <table>
      <tr>
        <th>Heading 1/Column 1</th>
        <th>Heading 2/Column 2</th>
      </tr>
      <tr>
        <td>Row 1 data Column 1</td>
        <td>Row 2 data Column 2</td>
      </tr>
      <tr>
        <td>Row 2 data Column 2</td>
        <td>Row 3 data Column 3</td>
      </tr>
    </table>

  <h3 style="color: aqua">Spanning columns or rows</h3>

    <table>
      <tr>
        <td>row 1 col 1</td>
        <td>row 2 col 2</td>
        <td>row 3 col 3</td>
      </tr>
      <tr>
        <td colspan="3">This second row spans all three columns</td>
      </tr>
      <tr>
        <td rowspan="2">This cell spans two rows</td>
        <td>row 3 col 2</td>
        <td>row 3 col 3</td>
      </tr>
      <tr>
        <td>row 4 col 2</td>
        <td>row 4 col 3</td>
      </tr>

    </table>

<!--<h3 style="color: aqua">Column Groups</h3>

<style>
  colgroup,
  col{
    border: 1px solid black;
    background: deepskyblue;
    width: 20px;
    visibility: collapse;
    display: none;
  }
</style>

<table>
  <colgroup>
    <col id="MySpecialColumn" />
    <col />
  </colgroup>
  <colgroup>
    <col class="CoolColumn" />
    <col class="NeatColumn" span="2" />
  </colgroup>
</table> -->

<h3 style="color: aqua">Example</h3>
<table>
  <thead>
  <tr>
    <th>Name</th>
    <th>Department</th>
    <th>Salary</th>
  </tr>
  </thead>
  <tr>
    <td>Yahya</td>
    <td>Computer Engineer</td>
    <td>20000</td>
  </tr>
  <tr>
    <td>Yahya</td>
    <td>Computer Engineer</td>
    <td>20000</td>
  </tr>
  <tr>
    <td>Yahya</td>
    <td>Computer Engineer</td>
    <td>20000</td>
  </tr>
</table>
<br>
</body>

<body>
<h3 style="color: aqua">Table with thead, tbody, tfoot, and caption</h3><br>

<table>
  <caption style="background-color: black; color: yellow; border-color: white" >Table Title</caption>
  <thead style="background-color: purple">
  <tr>
    <th style="border-color: orange">Header content 1</th>
    <th style="border-color: orange ">Header content 2</th>
  </tr>
  </thead>
  <tbody style="background-color: blue">
  <tr>
    <td style="border-color: red">Body content 1</td>
    <td style="border-color: red">Body content 2</td>
  </tr>
  </tbody>
  <tfoot style="background-color: green">
  <tr>
    <td style="border-color: red">Footer content 1</td>
    <td style="border-color: red">Footer content 2</td>
  </tr>
  </tfoot>
</table>
<br>

<h3 style="color: aqua">Heading scope</h3>

<table>
  <thead>
  <tr>
    <td></td>
    <th>Column Heading 1</th>
    <th>Column Heading 2</th>
  </tr>
  </thead>

  <tbody>
  <tr>
    <th>Row Heading1</th>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>Row Heading 2</th>
    <td></td>
    <td></td>
  </tr>
  </tbody>
</table>
<br>
<table>
  <thead>
  <tr>
    <td></td>
    <th scope="col">Column Heading1</th>
    <th scope="col">Column Heading 2</th>
  </tr>
  </thead>

  <tbody>
  <tr>
    <th scope="row">Row Heading 1</th>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th scope="row">Row Heading 2</th>
    <td></td>
    <td></td>
  </tr>
  </tbody>
</table>

<br>
<hr>
<h1 style="color: red">Classes</h1>
<div class="city main">
  <h2>London</h2>
  <p>London is capital of England</p>
</div>
<div class="city">
  <h2>Tokyo</h2>
  <p>Tokyo is capital of Japan</p>
</div>
<div class="city">
  <h2>Paris</h2>
  <p>Paris is capital of France</p>
</div>

<h1>My <span class="note">Important</span> Heading</h1>
<p>This is some <span class="note">important</span> text</p>
<br>
<hr>

<h1 style="color: red">Id</h1>

<h2 id="myHeader">My Cities</h2>

<h2 class="city">London</h2>
<p>London is capital of England</p>

<h2 class="city">Ankara</h2>
<p>Ankara is capital of Turkey</p>

<h2 class="city">Tokyo</h2>
<p>Tokyo is capital of Japan</p>
<br>
<hr>

<h1>Using HTML with CSS</h1>

<h2>This is a Heading</h2>
<p>This is a paragraph</p>

<br>
<hr>

<h1>HTML Images</h1>
<img src="./img/foto/pic_trulli.jpg" alt="Trulli">

<br>
<img src="./img/programming.gif" alt="Animation" style="float:right; width: 48px;height: 48px">
</body>
<br>
<hr>

<h1>Image Maps</h1>
<p>Click on the computer, the phone, or the cup of coffee to go a new page and read more
    about the topic :</p>

<img src="./img/foto/workplace.jpg" alt="Workplace" usemap="#workmap" width="400" height="379">

<map name="workmap">
  <area shape="rect" coords="34,44,270,350" href="computer.html" alt="Computer">
  <area shape="rect" coords="290,172,333,250" href="phone.html" alt="Phone">
  <area shape="circle" coords="337,300,44" href="coffee.html" alt="Cup of coffee">
</map>


<br>
<hr>

<h1>Forms</h1>
<br>

<form>
  <fieldset>
    <legend style="border: 1px solid black">Personalia:</legend>
  <label for="Name">Name</label> <br />
  <input type="text" id="name" name="name" placeholder="Your Name"> <br>
  <label for="Surname">Surname</label> <br>
  <input type="text" id="surname" name="surname" placeholder="Your Surname"> <br>
<fieldset/>

  <label for="email">Email</label> <br>
  <input type="email" id="email" name="email" placeholder="example@gmail.com"> <br>
  <label for="password">Password</label><br>
  <input type="password" id="password" name="password" placeholder="Your Password"> <br>

  <label for="date">Date</label> <br>
  <input type="date" name="date" id="date"> <br>

  GENDER
  <br>
  male
  <input type="radio" name="gender" value="male">
  female
  <input type="radio" name="gender" value="female">
  other
  <input type="radio" name="gender" value="other">
  <br>

  HOBBİES <br>
  Technology
  <input type="checkbox" name="tech" id="tech"> <br>
  Music
  <input type="checkbox" name="music" id="music"> <br>

  DEGREE <br>

  <select name="degree" id="degree">
    <option value="bachelor">Lisans</option>
    <option value="master">Yüksek Lisans</option>
    <option value="phd">Doktora</option>
  </select>
  <br>
  <hr>

  <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
  <br>

  <button type="reset">Sıfırla</button>
  <input type="submit" value="submit">

</form>
<br>
<hr>

<form>
  <input list="browser" name="browser">
  <datalist id="browser">
    <select name="browser" id="browser">
    <option value="Internet Explorer">Internet Explorer</option>
    <option value="Firefox">Firefox</option>
    <option value="Chrome">Chrome</option>
    <option value="Opera">Opera</option>
    <option value="Safari">Safari</option>
    </select>
  </datalist>
  <input type="submit">
</form>

<br>
<hr>

<h2>The Output Element</h2>
<p>The output element represents the result of a calculation.</p>
<form oninput="x.value=parseInt(a.value)+parseInt(b.value)">
  0
  <input type="range" id="a" name="a" value="50">
  100 +
  <input type="number" id="b" name="b" value="50">
  =
  <output name="x" for="a b"></output>
  <br><br>
  <input type="submit">
</form>

<br>
<hr>
<form>
  <label for="favcolor">Select your favorite color:</label>
  <input type="color" id="favcolor" name="favcolor" value="#ff0000">
  <input type="submit" value="Gönder">
</form>

<br>
<hr>

<h2>Display an Image as the Submit button</h2>

<form>
  <label for="fname">First name : </label>
  <input type="text" name="fname" id="fname" placeholder="Your Name"> <br><br>
  <label for="lname">Last name : </label>
  <input type="text" id="lname" name="lname" placeholder="Your Last Name"><br><br>
  <input type="image" src="./img/img_submit%20(1).gif" alt="submit" width="48" height="48">
</form>

<br>
<hr>

<h1>File Upload</h1>
<p>Show a file-select field which allows a file to be chosen for upload:</p>

<form>
  <label for="myfile">Select a file : </label>
  <input type="file" id="myfile" name="myfile"><br><br>
  <input type="submit" value="submit">
</form>

<br><br>
<hr>
<h1>A Hidden Field (look in source code)</h1>
<form>
  <label for="fname">First name : </label>
  <input type="text" id="fname" name="fname"><br><br>
  <input type="hidden" id="custId" name="custId" value="3487">
  <input type="submit" value="submit">
</form>
<p><strong>Note:</strong> The hidden field is not shown to the user, but the data is sent when the form is submitted.</p>
<br><br>
<hr>

<h2>Month Field</h2>

<p>The <strong>input type="month"</strong> allows the user to select a month and year.</p>

<form>
  <label for="bdaymounth">Birthday (month and year) : </label>
  <input type="month" id="bdaymounth" name="bdaymonth">
  <input type="submit" value="submit">
</form>

<br><br>
<hr>

<h2>Number Field</h2>

<form>
  <label for="quantity">Quantity (Between 1 and 5) : </label>
  <input type="number" id="quantity" name="quantity" min="1" max="5">
  <input type="submit" value="submit">
</form>
<br><br>
<hr>

<h2>Range Field</h2>

<p>Depending on browser support: The input type "range" can be displayed as a slider control.</p>

<form>
  <label for="vol">Volume (Between 0 and 50) : </label>
  <input type="range" id="vol" name="vol" min="0" max="50">
  <input type="submit" value="submit">
</form>

<br><br>
<hr>

<h2>Search Field</h2>

<form>
  <label for="gsearch">Google search : </label>
  <input type="search" id="gsearch" name="gsearch">
  <input type="submit" value="submit">
</form>

<br><br>
<hr>
<h2>Telephone Field</h2>

<form>
  <label for="phone">Enter a phone number : </label><br><br>
  <input type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br><br>
  <small>Format : 123-45-687</small><br><br>
  <input type="submit" value="submit">
</form>

<br><br>
<hr>

<h1>Show a Time Input Control</h1>
<form>
  <label for="appt">Select a time : </label>
  <input type="time" id="appt" name="appt">
  <input type="submit" value="submit">
</form>
<br><br>
<hr>

<h1>Display a URL Input Field</h1>

<form>
  <label for="homepage">Add your homepage</label>
  <input type="url" id="homepage" name="homepage">
  <input type="submit" value="submit">
</form>

<br><br>
<hr>

<h1>Display a Week Input Control</h1>

<form>
  <label for="week">Select a week : </label>
  <input type="week" id="week" name="week">
  <input type="submit" value="submit">
</form>

<br><br>
<hr>




</html>
