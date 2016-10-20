<!DOCTYPE HTML>
<html>

<head>
    <title>GetBike - BMD to BKT KMUTT</title>
    <meta charset="utf-8">
    <meta name="_token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/aos.css') }}">
</head>

<body>
  <img src="{{URL::asset('media/picture/black_ribbon_top_left.png')}}" class="black-ribbon stick-top stick-left"/>
    <header>
        <div id="nav_primary" class="nav_primary">
            <div class="col-sm-12" style="margin-left:-1em;">
                <div class="col-sm-1 col-sm-offset-6"><a id="home-nav" class="hvr-underline-white nav-my-menu" href="#intro">HOME</a></div>
                <div class="col-sm-1"><a id="detail-nav" class="hvr-underline-white nav-my-menu" href="#detail">DETAIL</a></div>
                <div class="col-sm-1"><a id="schdule-nav" class="hvr-underline-white nav-my-menu" href="#schedule">SCHEDULE</a></div>
                <div class="col-sm-1"><a id="location-nav" class="hvr-underline-white nav-my-menu" href="#map">LOCATION</a></div>
                <div class="col-sm-1"><a id="contract-nav" class="hvr-underline-white nav-my-menu" href="#contact">CONTACT</a></div>
                <div class="col-sm-1"><a href="#register" class="button-bulma is-special " style="margin-top:-0.8em; text-decoration:none;">REGISTER</a></div>
            </div>
        </div>
    </header>


    <section id="intro" style="">
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


    <section id="detail" style="background-color:white;" >
        <div class="container-fluid" data-aos="zoom-in" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="1000">
          <div style="margin-top:10%; margin-bottom:10%">
                <div class="row">
                    <div class="text-center" aos="fade-up" aos-offset="400" aos-duration="1000">
                        <p class="text-detail" style="font-size:2.2em">GET BIKE</p>
                    </div>
                </div>
                <div class="row text-center" style="text-center">
                        <p class="text-detail" style="font-weight: 300;">เราคือโครงการจักรยานประเพณี มจธ. บางมด - บางขุนเทียน กิจกรรมปั่นจักรยานทางไกลข้ามวิทยาเขต จากมจธ.บางมด ไปยังมจธ. บางขุนเทียน ระยะทางรวม 44 กิโลเมตร โดยนักศึกษา บุคลากร และบุคคลภายนอกสามารถเข้าร่วมได้ฟรี <br>ไม่มีค่าใช้จ่าย</p>
                </div>
                </div>
        </div>
    </section>

    <section id="detail-more">
            <div class="col-sm-6" style="height:540px;background-image: url('{{ URL::asset('media/picture/blue-filter-bg.jpg') }}');">
              <div class="container-fluid" style="margin-top:20%">
                <div class="row">
                    <h2 class="text-center detail-more-text" style="padding-bottom:15px; border-bottom:2px solid white; font-size:2.0em; font-weight:500;" data-aos="zoom-in" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="1000">สิ่งที่ต้องเตรียมมา</h2>
                  </div>
                    <div class="row" style="margin-top:5%">
                        <div class="col-sm-12">
                          <div class="detail-more-text">
                            <div class="col-sm-4 text-center" data-aos="fade-up" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="1200">
                                <img src="{{URL::asset('media/picture/bicycle.svg')}}" alt="" class="pic-detail" style="border:2px solid white;">
                                <p class="text-center" style="">จักรยาน</p>
                            </div>
                            <div class="col-sm-4 text-center" data-aos="fade-up" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="1400">
                                <img src="{{URL::asset('media/picture/bicycle-helmet.svg')}}" alt="" class="pic-detail" style="border:2px solid white;">
                                <p class="text-center" style="">หมวกนิรภัย</p>
                            </div>
                            <div class="col-sm-4 text-center" data-aos="fade-up" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="1600">
                                <img src="{{URL::asset('media/picture/id-card.svg')}}" alt="" class="pic-detail" style="border:2px solid white;">
                                <p class="" style="">บัตรประชาชน</p>
                            </div>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
            <div class="col-sm-6  hidden-xs hidden-sm" style="margin:0; padding:0;">
                <div class="parallax-window" style="z-index:3;" data-parallax="scroll" data-image-src="{{ URL::asset('media/picture/tu1.jpg') }}"></div>
            </div>
    </section>
    <section id="detail-more-2">
        <div class="container-fluid" style=" margin:0; padding:0;">
            <div class="col-sm-6 col-xs-12 hidden-xs hidden-sm" style="height:350px  margin:0; padding:0;">
                <div class="parallax-window" data-parallax="scroll" data-image-src="{{ URL::asset('media/picture/tu2.jpg') }}"></div>
            </div>
            <div class="col-sm-6" style="background-image: url('{{ URL::asset('media/picture/blue-filter-bg.jpg') }}'); height:540px">
                <div class="detail-more-text">
                    <h2 class="text-center" style="padding-bottom:10px; border-bottom:2px solid white; margin-top:15%;" data-aos="zoom-in" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="1000">คุณสมบัติในการเข้าร่วม</h2>
                    <p class="text-left" data-aos="fade-up" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="1200" style="margin-bottom:1em;">* มีอายุ <span>15</span> ปีขึ้นไป</p>
                    <p class="text-left" data-aos="fade-up" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="1350" style="margin-bottom:1em;">* ต้องสวมหมวกกันกระแทกสำหรับจักรยาน และรัดสายรัดให้เรียบร้อยในระหว่างการเข้าร่วมกิจกรรม</p>
                    <p class="text-left" data-aos="fade-up" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="1500" style="margin-bottom:1em;">* มีทักษะในการปั่นจักรยานทางแคบได้ และปั่นในเส้นทางที่ผู้จัดกิจกรรมจัดให้เท่านั้น</p>
                    <p class="text-left" data-aos="fade-up" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="1650" style="margin-bottom:1em;">* สุขภาพร่างกายแข็งแรง</p>
                    <p class="text-left" data-aos="fade-up" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="1800" style="margin-bottom:1em;">* งดดื่มสุราหรือของมึนเมาก่อนเข้าร่วมโครงการอย่างน้อย 12 ชั่วโมง</p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="schedule" style="background-color:#fff">
        <div class="container">
            <div class="page-header" style="">
                <h1 id="timeline" class="text-center" style="margin-bottom:1.8em;">ตารางเวลา</h1>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-badge" data-aos="zoom-in" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="1000"><i class="glyphicon glyphicon-check"></i></div>
                    <div class="timeline-panel" data-aos="zoom-in-right" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">06.30-07.30 น.</h4>
                        </div>
                        <div class="timeline-body">
                            <p>ลงทะเบียนกิจกรรม รับเสื้อที่ระลึก (สำหรับ 1000 ท่านแรกที่ลงทะเบียน) บริเวณหน้าตึกอธิการบดี</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge special" data-aos="zoom-in" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="700"><i class="glyphicon glyphicon-comment"></i></div>
                    <div class="timeline-panel" data-aos="zoom-in-right" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="700">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">07.30-08.00 น.</h4>
                        </div>
                        <div class="timeline-body">
                            <p>รศ.ดร.ศักรินทร์ ภูมิรัตน อธิการบดีมหาวิทยาเทคโนโลยีพระจอมเกล้าธนบุรี กล่าวต้อนรับผู้เข้าร่วมกิจกรรม พร้อมเปิดพิธี</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge " data-aos="zoom-in" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="700"><i class="glyphicon glyphicon-plane"></i></div>
                    <div class="timeline-panel" data-aos="zoom-in-right" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="700">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">08.00-09.30 น.</h4>
                        </div>
                        <div class="timeline-body">
                            <p>ตั้งขบวนพร้อมปั่นไป มจธ.บางขุนเทียน</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge special" data-aos="zoom-in" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="700"><i class="glyphicon glyphicon-cutlery"></i></div>
                    <div class="timeline-panel" data-aos="zoom-in-right" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="700">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">09.30-10.30 น.</h4>
                        </div>
                        <div class="timeline-body">
                            <p>ร่วมรับประทานผลไม้ เครื่องดื่ม อาหารว่างและเตรียมปั่นจักรยานกลับ</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge " data-aos="zoom-in" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="700"><i class="glyphicon glyphicon-plane"></i></div>
                    <div class="timeline-panel" data-aos="zoom-in-right" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="700">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">10.30น.</h4>
                        </div>
                        <div class="timeline-body">
                            <p>ตั้งขบวนปั่นกลับ มจธ.บางมด</p>
                        </div>
                    </div>
                </li>

                <li class="timeline-inverted">
                    <div class="timeline-badge special" data-aos="zoom-in" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="700"><i class="glyphicon glyphicon-flag"></i></div>
                    <div class="timeline-panel" data-aos="zoom-in-right" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="700">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">11.00น.</h4>
                        </div>
                        <div class="timeline-body">
                            <p>ตั้งขบวนปั่นกลับ มจธ.บางมด</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section id="map" style="background-color:#263238">
        <div class="col-sm-12">
            <div class="col-sm-10 col-sm-offset-1" data-aos="fade-up" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="1100">
                <div class="col-sm-6">
                    <h1 style="color:white; border-bottom:1px solid white; margin-top:2em">START LOCATION</h1>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="locationbm" style="border-bottom:1px solid white">
                                            BANGMOD
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <p style="margin-left:-2.0em; margin-top:.5em; color:white; font-size:1.7em;">King Mongkut's University of Technology Thonburi</p>
                                <p style="margin-left:-2.9em; margin-top:1.25em; color:white; font-size:1.1em">126 Pracha Uthit Rd., Bang Mod, Thung Khru, Bangkok 10140, Thailand</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="map-iframe" class="embed-responsive">
                    <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyATZMrRLszCUvfd1AsG3CivAj5ve_Z6oYU&q=ChIJrTLr-GyuEmsRBfy61i59si0"frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <section id="register" style="background: url({{ URL::asset('/media/image/blue-filter-bg.jpg') }})">
        <div class="container-fluid">
            <div class="row">
                <div class="register-text">
                    <p class="text-center" style="font-weight:300;">จำนวนคนที่เข้าร่วม</p>
                    <p id="currentParticipant" class="text-center" style="font-size:2em"></p>
                </div>
            </div>
            <div class="col-sm-4 col-sm-offset-4 text-center">
                <div data-toggle="modal" data-target="#registerModal" class="register-btn text-center animated infinite pulse">
                    <a class="text-center">ร่วมเป็นส่วนหนึ่งกับพวกเรา</a>
                </div>
                <div data-toggle="modal" data-target="#forgetRegisterCodeModal" class="forget-btn text-center animated fadeIn">
                    <a class="text-center">ลืมรหัสลงทะเบียน</a>
                </div>
            </div>
        </div>
    </section>
    <!-- <div class="register-btn text-center">
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#registerModal">
        ร่วมเป็นส่วนหนึ่งกับพวกเรา
      </button>
      <br>
      <br>
      <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#forgetRegisterCodeModal">
        ลืมรหัสลงทะเบียน
      </button> -->
    <section id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-sm-offset-3" style="">
                    <h3>CONTACT</h3>
                    <p> <img src="{{ URL::asset('media/picture/fb.svg') }}" class="contact-img" alt="Responsive image" style=""> KMUTT GET BIKE</p>
                    <p><img src="{{ URL::asset('media/picture/twitter.svg') }}" class="contact-img" alt="Responsive image" style=""> @getbikekmutt</p>
                    <p><img src="{{ URL::asset('media/picture/phone.svg') }}" class="contact-img" alt="Responsive image" style=""> 024706969</p>
                </div>
                <div class="col-sm-5">
                    <h3>SPONSOR</h3>
                    <a href="https://www.facebook.com/KMUTTBikeTradition/"><img src="{{ URL::asset('media/picture/kmutt_logo.jpg') }}" class="sponsor-img" alt="Responsive image" style=""></a>
                    <a href="https://twitter.com/KMUTTNews"><img src="{{ URL::asset('media/picture/prayut.png') }}" class="sponsor-img" alt="Responsive image" style=""></a>
                    <img src="{{ URL::asset('media/picture/dekcom.jpg') }}" class="sponsor-img" alt="Responsive image" style="">
                </div>
            </div>
        </div>
    </section>
    <div id="line"></div>

    <!-- Modal -->

    <div class="modal fade" id="forgetRegisterCodeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel" style="color:red">ลืมรหัสลงทะเบียน</h4>
                </div>
                <form id="checkRegisterCodeForm" action="">
                    <div class="modal-body">
                        <div id="first_name-control_check" class="form-group">
                            <label for="first_name_check">ชื่อจริง</label>
                            <input type="text" class="form-control" id="first_name_check" placeholder="First Name" tabindex="1">
                            <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div id="last_name-control_check" class="form-group">
                            <label for="last_name_check">นามสกุล</label>
                            <input type="text" class="form-control" id="last_name_check" placeholder="Last Name" tabindex="2">
                            <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div id="phone_number-control_check" class="form-group">
                            <label for="phone_number_check">เบอร์โทรศัพท์ โดยไม่มี -</label>
                            <input type="text" class="form-control" id="phone_number_check" placeholder="Phone Number without '-' Ex. 0998889988" tabindex="3">
                            <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div id="email-control_check" class="form-group">
                            <label for="email_check">อีเมลล์</label>
                            <input type="text" class="form-control" id="email_check" placeholder="E-Mail" tabindex="4">
                            <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                        <button type="submit" class="btn btn-warning">ค้นหาข้อมูล</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">ลงทะเบียน</h4>
                </div>
                <form id="registerForm" action="">
                    <div class="modal-body">
                        <div id="first_name-control" class="form-group">
                            <label for="first_name">ชื่อจริง</label>
                            <input type="text" class="form-control" id="first_name" placeholder="First Name" tabindex="1">
                            <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div id="last_name-control" class="form-group">
                            <label for="last_name">นามสกุล</label>
                            <input type="text" class="form-control" id="last_name" placeholder="Last Name" tabindex="2">
                            <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div id="phone_number-control" class="form-group">
                            <label for="phone_number">เบอร์โทรศัพท์ โดยไม่มี -</label>
                            <input type="text" class="form-control" id="phone_number" placeholder="Phone Number without '-' Ex. 0998889988" tabindex="3">
                            <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div id="email-control" class="form-group">
                            <label for="email">อีเมลล์</label>
                            <input type="text" class="form-control" id="email" placeholder="E-Mail" tabindex="4">
                            <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                        <button type="submit" class="btn btn-primary">ลงทะเบียน</button>
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
                    <h3 style="color : red; text-align: center" id="registerCodeHeader">กรุณาจดรหัสลงทะเบียนเพื่อใช้ในการลงทะเบียนที่หน้างาน</h3>
                    <h2 style="color : red; text-align: center" id="myRegisterCode"></h2>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ URL::asset('js/script.js') }}"></script>
    <script src="{{ URL::asset('js/particles.js') }}"></script>
    <script src="{{ URL::asset('js/particles.run.app.js') }}"></script>

    <script src="{{ URL::asset('js/parallax.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        var apiUpdateParticipant = "{{ route('api.getparticipant') }}";
        var apiInsertParticipant = "{{ route('api.insertparticipant') }}";
        var apiCheckRegisterCode = "{{ route('api.checkregistercode') }}";
    </script>
    <script src="{{ URL::asset('js/aos.js') }}"></script>
    <script>
        AOS.init({
            offset: 200,
            duration: 600,
            easing: 'ease-in-sine',
            delay: 100,
        });
    </script>
    <script src="{{ URL::asset('js/getbike.js') }}"></script>
    <script src="{{ URL::asset('js/footer.js') }}"></script>
</body>

</html>
