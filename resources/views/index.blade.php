<!DOCTYPE HTML>
<html>
<head>
    <title>GetBike - BMD to BKT KMUTT</title>
    <meta charset="utf-8">
    <meta name="_token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Kanit:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
    <script src="{{ URL::asset('js/getbike.js') }}"></script>
</head>
<body>
  <header>
    <div id="nav_primary">
      <div class="col-sm-12">
        <div class="col-sm-1 col-sm-offset-7"><a class="hvr-underline-from-center nav-my-menu" href="#intro">HOME</a></div>
        <div class="col-sm-1"><a class="hvr-underline-from-center nav-my-menu" href="#detail">DETAIL</a></div>
        <div class="col-sm-1"><a class="hvr-underline-from-center nav-my-menu" href="#map">LOCATION</a></div>
        <div class="col-sm-1"><a class="hvr-underline-from-center nav-my-menu" href="">CONTACT</a></div>
        <div class="col-sm-1"><a href="" class="button-bulma is-special " style="margin-top:-0.8em; text-decoration:none;">REGISTER</a></div>
      </div>
    </div>
  </header>


  <section id="intro" style="width:100%; height:100%">
          <div class="vdo">
            <div class="intro-content">
              <h1><b>GET YOUR BIKE,</b></h1>
              <h1><b>RIDE WITH US</b></h1>
              <h3 style="font-size:1em;font-weight: 100; "><i><-BMD-BKT-></i></h3>
            </div>
                <div id="particles-js"></div>
                <video autoplay loop preload="auto" class="vdo-responsive">
                  <source src="{{ URL::asset('media/video/intro-background.mp4') }}" type="video/mp4">
                </video>
                <div class="blackbox"></div>
          </div>
  </section>


  <section id="detail">
    <div class="container-fluid">
      <div style="margin-top:10em">
        <div class="row">
          <div class="col-sm-3 col-sm-offset-5">
          <p class="text-detail" style="font-size:2.2em">GET BIKE</p>
          </div>
        </div>
        <div class="row" style="margin-left:-8%">
          <center>
            <p class="text-detail" style="font-weight: 300;">เราคือโครงการจักรยานประเพณี มจธ. บางมด - บางขุนเทียน กิจกรรมปั่นจักรยานทางไกลข้ามวิทยาเขต<br>จากมจธ.บางมด ไปยังมจธ. บางขุนเทียน ระยะทางรวม 44 กิโลเมตร โดยนักศึกษา บุคลากร และบุคคลภายนอกสามารถเข้าร่วมได้ฟรี <br>ไม่มีค่าใช้จ่าย</p>
          </center>
        </div>
        </div>
    </div>
  </section>

<section id="detail-more">
  <div class="container-fluid" style=" margin:0; padding:0;">
    <div class="col-sm-6">
      <h2>สิ่งที่ต้องเตรียมมา</h2>
      <p>* จักรยาน</p>
      <p>* หมวกกันกระแทกสำหรับจักรยาน</p>
      <p>* บัตรประจำตัวประชาชน <br>หรือบัตรอื่นๆ ที่ราชการออกให้เพื่อใช้ในการลงทะเบียนในวันงาน</p>
    </div>
    <div class="col-sm-6" style="height:350px  margin:0; padding:0;">
      <div class="parallax-window" data-parallax="scroll" data-image-src="{{ URL::asset('media/picture/biker.jpg') }}"></div>
    </div>
  </div>
</section>
<section id="detail-more-2">
  <div class="container-fluid" style=" margin:0; padding:0;">
    <div class="col-sm-6" style="height:350px  margin:0; padding:0;">
      <div class="parallax-window" data-parallax="scroll" data-image-src="{{ URL::asset('media/picture/biker.jpg') }}"></div>
    </div>
    <div class="col-sm-6">
      <h2>คุณสมบัติในการเข้าร่วม</h2>
      <p>* มีอายุ 15 ปีขึ้นไป</p>
      <p>* ต้องสวมหมวกกันกระแทกสำหรับจักรยาน และรัดสายรัดให้เรียบร้อยในระหว่างการเข้าร่วมกิจกรรม</p>
      <p>* มีทักษะในการปั่นจักรยานทางแคบได้ และปั่นในเส้นทางที่ผู้จัดกิจกรรมจัดให้เท่านั้น</p>
      <p>* สุขภาพร่างกายแข็งแรง</p>
      <p>* งดดื่มสุราหรือของมึนเมาก่อนเข้าร่วมโครงการอย่างน้อย 12 ชั่วโมง</p>
    </div>
  </div>
</section>
<section id="schedule">
  <div class="container-fluid" style="margin-left:5vh; margin-right:5vh;">
    <div class="row">
      <div class="col-sm-3 col-sm-offset-5">
      <h2 class="">ตารางเวลา</h2>
      </div>
      <div class="col-sm-5 col-sm-offset-4">
      <h2 class="" style="margin-left:-1em;">วันเสาร์ที่ 24 ธันวาคม พ.ศ. 2559</h2>
      </div>
    </div>
    <div class="row">
      <table class="table table-striped">
        <tr>
          <th>เวลา</th>
          <th>รายละเอียดกิจกรรม</th>
        </tr>
        <tr>
          <td>06.30-07.30 น.</td>
          <td>ลงทะเบียนกิจกรรม รับเสื้อที่ระลึก(สำหรับ 1000 ท่านแรกที่ลงทะเบียน) <br>บริเวณหน้าตึกอธิการบดี</td>
        </tr>
        <tr>
          <td>07.30-08.00 น.</td>
          <td>รศ.ดร.ศักรินทร์ ภูมิรัตน อธิการบดีมหาวิทยาเทคโนโลยีพระจอมเกล้าธนบุรี กล่าวต้อนรับผู้เข้าร่วมกิจกรรม พร้อมเปิดพิธี</td>
        </tr>
        <tr>
          <td>08.00-09.30 น.</td>
          <td>ตั้งขบวนพร้อมปั่นไป มจธ.บางขุนเทียน</td>
        </tr>
        <tr>
          <td>09.30-10.30 น.</td>
          <td>ร่วมรับประทานผลไม้ เครื่องดื่ม อาหารว่างและเตรียมปั่นจักรยานกลับ</td>
        </tr>
        <tr>
          <td>10.30น.</td>
          <td>ตั้งขบวนปั่นกลับ มจธ.บางมด</td>
        </tr>
        <tr>
          <td>11.00น.</td>
          <td>ตั้งขบวนปั่นกลับ มจธ.บางมด</td>
        </tr>
      </table>
    </div>
  </div>
</section>
<section id="map">
<div class="col-sm-12" style="background-color:gray">
  <div class="col-sm-8 col-sm-offset-2">
    <div class="col-sm-6">
      <h2>START LOCATION</h2>
      <div class="container-fluid">
          <div class="row">
        <div class="col-sm-2">
          <div class="container-fluid">
            <div class="row">
              <div class="locationbm">
                BANGMOD
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-10">
            <p style="margin-left:-1.5em; margin-top:1em;">King Mongkut's University of Technology Thonburi</p>
            <p style="margin-left:-1.5em; margin-top:1em;">126 Pracha Uthit Rd., Bang Mod, Thung Khru, Bangkok 10140, Thailand</p>
        </div>
      </div>
      </div>
    </div>
    <div id="map-iframe" class="embed-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30084.6245142225!2d100.46518576955465!3d13.640782514786087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf656e94ff13324ad!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14Lie4Lij4Liw4LiI4Lit4Lih4LmA4LiB4Lil4LmJ4Liy4LiY4LiZ4Lia4Li44Lij4Li1!5e0!3m2!1sth!2sus!4v1476690235096"frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</div>
</section>
  <section id="register" style="background-image: url('{{ URL::asset('media/picture/blue-filter-bg.jpg') }}');">
    <div class="container-fluid ">
        <div class="row">
            <div class="register-text">
            <p class="text-center" style="font-weight:300;">จำนวนคนที่เข้าร่วม</p>
            <p id="currentParticipant" class="text-center" style="font-size:2em">XXX คน</p>
            </div>
        </div>
        <div class="col-sm-4 col-sm-offset-4 text-center">
        <div class="register-btn text-center">
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#registerModal">
              ร่วมเป็นส่วนหนึ่งกับพวกเรา
            </button>
        </div>
        </div>
    </div>
  </section>

  <!-- Modal -->

  <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">ลงทะเบียน</h4>
        </div>
        <form id="registerForm" action="">
        <div class="modal-body">
            <div class="form-group">
              <label for="first_name">ชื่อจริง</label>
              <input type="text" class="form-control" id="first_name" placeholder="First Name" tabindex="1">
            </div>
            <div class="form-group">
              <label for="first_name">นามสกุล</label>
              <input type="text" class="form-control" id="last_name" placeholder="Last Name" tabindex="2">
            </div>
            <div id="phone_number-control" class="form-group">
              <label for="first_name">เบอร์โทรศัพท์ โดยไม่มี -</label>
              <input type="text" class="form-control" id="phone_number" placeholder="Phone Number without '-' Ex. 0998889988" tabindex="3">
              <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
            </div>
            <div id="email-control" class="form-group">
              <label for="first_name">อีเมลล์</label>
              <input type="text" class="form-control" id="email" placeholder="E-Mail" tabindex="4">
              <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
          <button type="submit" onclick="insertParticipant()" class="btn btn-primary">ลงทะเบียน</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="registerCodeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">รหัสลงทะเบียน</h4>
        </div>
        <div class="modal-body">
          <h3 style="color : red; text-align: center">กรุณาจดรหัสลงทะเบียนเพื่อใช้ในการลงทะเบียนที่หน้างาน</h2>
          <h2 style="color : red; text-align: center" id="myRegisterCode"></h2>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ URL::asset('js/script.js') }}"></script>
  <script src="{{ URL::asset('js/particles.js') }}"></script>
  <script src="{{ URL::asset('js/particles.run.app.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="{{ URL::asset('js/parallax.min.js') }}"></script>
  <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript">
    var apiUpdateParticipant = "{{ route('api.getparticipant') }}";
    var apiInsertParticipant = "{{ route('api.insertparticipant') }}";
    window.onload = function() { updateParticipant(); }
    var timer = setInterval(updateParticipant,2000);
    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
      });
    });
    $("#registerForm").submit(function (e) {
        e.preventDefault();
        insertParticipant();
    });
  </script>
</body>
</html>
