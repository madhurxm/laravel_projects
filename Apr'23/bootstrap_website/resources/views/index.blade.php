<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- JS for Bootstrap -->

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha2/js/bootstrap.min.js"
      integrity="sha512-Pvg6adp44X74TYtqbnGE/mv3wka8G/UTq/nVf4XRpfufQ/AObqF+grFoc7cmFmQNdmaqq8lnMtfyib0etZTBVA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- BOOTSTRAP CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
      crossorigin="anonymous"
    />
    <!-- ICONS CDN -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />

    <!-- CSS link -->
    <link rel="stylesheet" href="{{ URL::asset('assets\css\index_style.css') }}" />

    <title>TINKER</title>
  </head>

  <body>
    <div class="container-fluid">
      <!-- ====== HEADER-NAVBAR ====== -->

      <div class="row" id="nav_div">
        <nav class="navbar bg-light navbar-expand-lg fixed-top">
          <div class="container-fluid">
            <a class="navbar-brand" href="#div1" style="font-size: 0.6cm"
              ><span style="color: orange; font-weight: 600">T</span>INKER</a
            >

            <!-- == Collapse navbar button == -->
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#nav_data"
              aria-controls="navbarTogglerDemo01"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <!-- == Navbar items == -->
            <div
              class="collapse navbar-collapse"
              id="nav_data"
              style="justify-content: right"
            >
              <div class="navbar-nav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#div1">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#div2">FEATURES</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#div3">PORTFOLIO</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#div4">@CEO</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#div5">BLOG</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#div6">CONTACT US</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#info">ABOUT US</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>

      <!-- ===== DIV 1 START ===== -->

      <div class="row p-5" id="div1">
        <div class="col-md-2"></div>

        <div class="col-md-8 p-5" id="div1_text" style="margin-top: 100px">
          <span
            style="color: rgb(255, 115, 0); font-size: 39px; font-weight: 800"
            >TINKER
          </span>
          <span
            style="color: rgb(255, 255, 255); font-size: 39px; font-weight: 800"
            >HTML5
          </span>
          <span
            style="color: rgb(0, 247, 41); font-size: 39px; font-weight: 800"
            >CONTENT</span
          >
          <br />
          <p
            style="color: rgb(255, 255, 255); font-weight: 200; font-size: 18px"
          >
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti,
            odit aliquam earum animi eaque error iusto in illum assumenda veniam
            laudantium minima numquam aut ipsam corporis minus. Ut pariatur rem
            sint natus porro, ducimus excepturi neque inventore labore eos hic
            debitis doloribus, veritatis atque velit, numquam deleniti id qui
            quos.
          </p>
          <button
            type="button"
            class="btn btn-outline-warning btn-lg"
            style="border-radius: 25px"
          >
            LET'S START
          </button>
        </div>

        <div class="col-md-2"></div>
      </div>

      <!-- ===== DIV 1 END ===== -->
      <!-- ===== DIV 2 START ===== -->

      <div class="row p-5" id="div2">
        <div class="row mb-5"></div>

        <!--==== Col1 Start ====-->
        <div class="col-md-3 p-4" style="text-align: center">
          <div class="row m-3" style="justify-content: center">
            <div
              style="width: 85px; border: 1px white solid; border-radius: 50%"
              class="p-3 bg-danger"
            >
              <img
                src="{{ URL::asset('assets/img/div2_icons/service_icon_01.png')}}"
                alt="Service Icon"
                class="img-fluid"
                style="width: 45px; height: 45px"
              />
            </div>
          </div>
          <div class="row mt-3">
            <span style="color: white; font-size: x-large"
              >Smart Notifications</span
            >
            <hr
              style="
                height: 5px;
                background-color: rgb(255, 255, 255);
                opacity: 1;
              "
              class="my-2"
            />
            <p style="color: white">
              Lorem ipsum dolor sit inima dicta. Quia quo quaerat velit repel
              lendus eum? xc asf fa asf as quo quaerat velit repel le
            </p>
          </div>
          <button
            type="button"
            class="btn btn-outline-info"
            style="border-radius: 25px"
          >
            CONTINUE READING..
          </button>
        </div>
        <!--==== Col1 End ====-->

        <!--==== Col2 Start ====-->
        <div class="col-md-3 p-4" style="text-align: center">
          <div class="row m-3" style="justify-content: center">
            <div
              style="width: 85px; border: 1px white solid; border-radius: 50%"
              class="p-3 bg-danger"
            >
              <img
                src="{{ URL::asset('assets/img/div2_icons/service_icon_02.png')}}"
                alt="Service Icon"
                class="img-fluid"
                style="width: 45px; height: 45px"
              />
            </div>
          </div>
          <div class="row mt-3">
            <span style="color: white; font-size: x-large"
              >Lovely Web Design</span
            >
            <hr
              style="
                height: 5px;
                background-color: rgb(255, 255, 255);
                opacity: 1;
              "
              class="my-2"
            />
            <p style="color: white">
              Lorem ipsum dolor sit inima dicta. Quia quo quaerat velit repel
              lendus eum? xc asf fa asf as quo quaerat velit repel le
            </p>
          </div>
          <button
            type="button"
            class="btn btn-outline-info"
            style="border-radius: 25px"
          >
            CONTINUE READING..
          </button>
        </div>
        <!--==== Col2 End ====-->

        <!--==== Col3 Start ====-->
        <div class="col-md-3 p-4" style="text-align: center">
          <div class="row m-3" style="justify-content: center">
            <div
              style="width: 85px; border: 1px white solid; border-radius: 50%"
              class="p-3 bg-danger"
            >
              <img
                src="{{ URL::asset('assets/img/div2_icons/service_icon_03.png')}}"
                alt="Service Icon"
                class="img-fluid"
                style="width: 45px; height: 45px"
              />
            </div>
          </div>
          <div class="row mt-3">
            <span style="color: white; font-size: x-large"
              >24/7 Quick Support</span
            >
            <hr
              style="
                height: 5px;
                background-color: rgb(255, 255, 255);
                opacity: 1;
              "
              class="my-2"
            />
            <p style="color: white">
              Lorem ipsum dolor sit inima dicta. Quia quo quaerat velit repel
              lendus eum? xc asf fa asf as quo quaerat velit repel le
            </p>
          </div>
          <button
            type="button"
            class="btn btn-outline-info"
            style="border-radius: 25px"
          >
            CONTINUE READING..
          </button>
        </div>
        <!--==== Col3 End ====-->

        <!--==== Col4 Start ====-->
        <div class="col-md-3 p-4" style="text-align: center">
          <div class="row m-3" style="justify-content: center">
            <div
              style="width: 85px; border: 1px white solid; border-radius: 50%"
              class="p-3 bg-danger"
            >
              <img
                src="{{URL::asset('assets\img\div2_icons\service_icon_04.png')}}"
                alt="Service Icon"
                class="img-fluid"
                style="width: 45px; height: 45px"
              />
            </div>
          </div>
          <div class="row mt-3">
            <span style="color: white; font-size: x-large">Settings and Privacy</span>
            <hr
              style="
                height: 5px;
                background-color: rgb(255, 255, 255);
                opacity: 1;
              "
              class="my-2"
            />
            <p style="color: white">
              Lorem ipsum dolor sit inima dicta. Quia quo quaerat velit repel
              lendus eum? xc asf fa asf as quo quaerat velit repel le
            </p>
          </div>
          <button
            type="button"
            class="btn btn-outline-info"
            style="border-radius: 25px"
          >
            CONTINUE READING..
          </button>
        </div>
        <!--==== Col4 End ====-->
      </div>
      <!-- ===== DIV 2 END ===== -->

      <!-- ===== DIV 3 START ===== -->

      <div class="row" id="div3">
        <!-- ==== COL1 ==== -->
        <div
          class="col-md-3"
          style="background-color: rgba(13, 88, 88, 0.774); padding-top: 70px"
        >
          <div class="row pt-5">
            <h2 style="color: white">Our Gallery</h2>
            <hr
              class="m-2"
              style="
                height: 4px;
                background-color: white;
                opacity: 1;
                width: 90%;
                border-color: white;
              "
            />
            <p style="color: white; text-align: justify" class="pe-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
              ab possimus similique iste provident id itaque accusantium iure
              cum blanditiis!
            </p>
          </div>
          <ul style="color: white">
            <li>Show All</li>
            <li>Branding</li>
            <li>Graphic</li>
            <li>Nature</li>
          </ul>
        </div>

        <!-- ==== COL2 ==== -->
        <div class="col-md-9 px-3 py-5 my-5" id="div1_text">
          <div class="row my-4">
            <div class="col-md-4 m-0 p-1">
              <img
                class="img-fluid rounded"
                style="
                  max-width: 100%;
                  min-height: 220px;
                  border: 1px rgba(0, 0, 0, 0.4) solid;
                "
                src="{{ URL::asset('assets\img\portfolio_img\portfolio_item_01.jpg')}}"
              />
            </div>
            <div class="col-md-4 m-0 p-1">
              <img
                class="img-fluid rounded"
                style="
                  max-width: 100%;
                  min-height: 220px;
                  border: 1px rgba(0, 0, 0, 0.4) solid;
                "
                src="{{ URL::asset('assets\img\portfolio_img\portfolio_item_02.jpg')}}"
              />
            </div>
            <div class="col-md-4 m-0 p-1">
              <img
                class="img-fluid rounded"
                style="
                  max-width: 100%;
                  min-height: 220px;
                  border: 1px rgba(0, 0, 0, 0.4) solid;
                "
                src="{{ URL::asset('assets\img\portfolio_img\portfolio_item_03.jpg')}}"
              />
            </div>
          </div>
          <div class="row my-2">
            <div class="col-md-4 m-0 p-1">
              <img
                class="img-fluid rounded"
                style="
                  max-width: 100%;
                  min-height: 220px;
                  border: 1px rgba(0, 0, 0, 0.4) solid;
                "
                src="{{ URL::asset('assets\img\portfolio_img\portfolio_item_04.jpg')}}"
              />
            </div>
            <div class="col-md-4 m-0 p-1">
              <img
                class="img-fluid rounded"
                style="
                  max-width: 100%;
                  min-height: 220px;
                  border: 1px rgba(0, 0, 0, 0.4) solid;
                "
                src="{{ URL::asset('assets\img\portfolio_img\portfolio_item_05.jpg')}}"
              />
            </div>
            <div class="col-md-4 m-0 p-1">
              <img
                class="img-fluid rounded"
                style="
                  max-width: 100%;
                  min-height: 220px;
                  border: 1px rgba(0, 0, 0, 0.4) solid;
                "
                src="{{ URL::asset('assets\img\portfolio_img\portfolio_item_06.jpg')}}"
              />
            </div>
          </div>
        </div>
      </div>

      <!-- ===== DIV 3 END ===== -->

      <!-- ===== DIV 4 START ===== -->

      <div class="row p-5" id="div4">
        <!-- <div class="col-md-2">a</div>
        <div
          class="col-md-6 pb-6"
          style="background-color: white; margin: 150px "
        >AA</div>
        <div class="col-md-2">a</div> -->

        <div
          class="row mt-5 p-4"
          style="
            background-color: white;
            margin-left: 0px;
            margin-right: 0px;
            text-align: justify;
            height: fit-content;
          "
        >
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto
          possimus molestias accusantium, repellendus nesciunt reprehenderit
          eligendi incidunt corporis quo laudantium accusamus sit a quis eius
          unde quod ipsa cum cumque voluptate? Eligendi similiqpossimus. Maiores
          quia ut ratione nesciunt similique asperiores qui voluptate et!
          Recusandae?ue magnam corruptitis deserunt omnis doloribus dolore fugit
          iste, tempora repellat eum molestiae, sit itaque pariatur nisi
          possimus. Maiores quia ut ratione nesciunt similique asperiores qui
          voluptate et! Recusandae?tur nisi possimus. Maiores quia ut ratione
          nesciunt similique asperiores qui voluptate et! Recusandae?
        </div>
        <div
          class="row mt-0"
          style="
            margin-left: 0px;
            margin-right: 0px;
            text-align: center;
            margin-top: 0px;
          "
        >
          <p class="m-0 p-0">
            <span style="font-size: 35px; font-weight: 600; color: white"
              >Sarwan Sir</span
            >
            <br /><span style="font-size: large; color: white">CEO</span>
          </p>
        </div>
      </div>

      <!-- ===== DIV 4 END ===== -->

      <!-- ===== DIV 5 START ===== -->

      <div class="row pt-5" id="div5">
        <div class="row my-5" style="background-color: rgba(0, 0, 0, 0.45)">
          <!-- == Col1 == -->
          <div class="col-md-4">
            <div class="row p-4" style="text-align: center">
              <h4 style="color: white">Our Blog Post</h4>
              <hr
                class="m-auto mt-2 mb-1"
                style="
                  background-color: white;
                  border-color: white;
                  height: 2px;
                  opacity: 1;
                  width: 95%; ;
                "
              />
              <p style="color: white; text-align: justify">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos
                quas aperiam laudantium distinctio ducimus facilis. Lorem ipsum
                dolor sit amet, consectetur adipisicing elit. Beatae distinctio
                officia debitis dolor, vero quo.
              </p>
            </div>
            <div class="row">
              <div class="d-grid gap-2 px-5">
                <button
                  type="button"
                  class="btn rounded-3 btn-outline-success btn-lg"
                >
                  Lorem, afsipsum
                </button>
                <button
                  type="button"
                  class="btn rounded-3 btn-outline-success btn-lg"
                >
                  fsaLorem, ipsum
                </button>
                <button
                  type="button"
                  class="btn rounded-3 btn-outline-success btn-lg"
                >
                  Lorem ipsum
                </button>
                <button
                  type="button"
                  class="btn rounded-3 btn-outline-success btn-lg"
                >
                  Lorem, ipsum
                </button>
              </div>
            </div>
          </div>
          <!-- == Col2 == -->
          <div class="col-md-8">
            <div class="row p-4">
              <img src="{{ URL::asset('assets\img\div_img\blog_item_01.jpg')}}" />
              <p style="color: white; text-align: justify">
                <span style="font-size: xx-large">Neu Lorem, ipsum.</span><br />
                <a href="#" style="color: yellow">Ols</a> Lorem ipsum dolor sit.
                <a href="#" style="color: yellow">Thisn</a> Lorem, ipsum dolor
                <a href="#" style="color: yellow">27-July-2510</a> Lorem ipsum
                dolor sit amet consectetur adipisicing elit. Odio atque ullam
                rerum repellat quod, doloribus adipisci id perspiciatis laborum
                culpa, dicta totam omnis architecto aspernatur minima assumenda
                reprehenderit quisquam. Quasi, quo labore. Inventore voluptas
                reiciendis eaque neque magnam atque error, consequuntur
                consectetur quos laborum sit cupiditate eveniet dignissimos
                obcaecati earum?
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- ===== DIV 5 END ===== -->
      <!-- ===== DIV 6 START ===== -->

      <div class="row py-5 px-0" id="div6">
        <!-- Contact Us -->
        <div class="row" style="text-align: center">
          <p>
            <span><h3 class="mb-0">Contact Us</h3></span>Lorem ipsum dolor sit,
            amet consectetur adipisicing elit. Accusamus magnam perferendis
            aspernatur numquam architecto corrupti nesciunt ipsum. Possimus
            inventore illum explicabo error quo fugiat ipsum alias consequatur,
            id laboriosam tempora maxime in odio voluptate quasi quos aut
            eligendi earum dignissimos officiis esse quis. Molestiae dolor,
            temporibus libero sit iusto reprehenderit.
            <a href="mailto: sarwan@mawaimail.com">
              <button
                type="button"
                class="btn rounded-5 btn-success"
                style="
                  width: 150px;
                  height: 40px;
                  margin-left: auto;
                  margin-right: auto;
                  margin-top: 2%;
                "
              >
                Mail us
              </button>
            </a>
          </p>
        </div>

        <!-- MAP -->
        <div class="row" style="justify-content: center ">
          <!-- <div class="col-md-12"> -->
          <div style="min-width: 90%; max-width: 100%; height: 300px">
            <iframe
              width="100%"
              height="100%"
              frameborder="0"
              scrolling="no"
              marginheight="0"
              marginwidth="0"
              src="https://maps.google.com/maps?width=100%25&amp;height=100%25&amp;hl=en&amp;q=mawai%20info+(Mawai%20Infotech)&amp;t=h&amp;z=6&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
              ><a href="https://www.maps.ie/distance-area-calculator.html"
                >measure acres/hectares on map</a
              ></iframe
            >
          </div>
          <!-- </div> -->
        </div>
      </div>

      <!-- ===== DIV 6 END ===== -->

      <!-- ===== Footer Start ===== -->

      <div class="row pt-3 bg-black" id="info">
        <!-- == About us == -->
        <div
          class="row pt-4 ps-5 pe-5 m-0"
          style="color: rgba(255, 255, 255, 0.6); background-color: black"
        >
          <div class="col-md-6">
            <b style="color: white">ABOUT US</b><br />
            <p style="text-align: justify">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus
              magnam hic maiores nobis vitae numquam in cupiditate. Molestias
              est,tas dolorem voluptate? Officia at, deleniti neque nostrum
              harum illo libero cupiditate fugiat dolore animi replor Lorem
              ipsum dolor sit amet consectetur adipisicing elit. Iure magnam
              repudiandae corrupti expedita minima debitis repellat quasi vero
              quis? Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Laudantium libero, ratione ullam non alias accusamus ut voluptas
              ipsum. Pariatur, qui! ellat.
            </p>
          </div>
          <div class="col-md-6" style="text-align: end">
            <b>FOLLOW US</b>
            <br />
            <a href="https://www.facebook.com" target="_blank" class="p-1"
              ><i class="bi bi-facebook" style="color: white"></i
            ></a>
            <a href="https://www.linkedin.com" target="_blank" class="p-1"
              ><i class="bi bi-linkedin" style="color: white"></i
            ></a>
            <a href="https://www.twitter.com" target="_blank" class="p-1"
              ><i class="bi bi-twitter" style="color: white"></i
            ></a>
          </div>
        </div>

        <!-- ==Contact details -->

        <div
          class="row m-0"
          style="color: white; background-color: rgb(15, 15, 15)"
        >
          <div class="col-md-3 p-3">
            <p style="font-size: 15px; font-weight: 200">
              Copyright © 2023 Tinker All rights reserved
            </p>
          </div>
          <div class="col-md-3 p-3">
            <span>Address</span>
            <p style="font-size: 15px; font-weight: 200">
              110, Lorem ipsum dolor sit, Famet consectetur adipisicing elit.
              Itaque, Wquaerat, 115156
            </p>
          </div>
          <div class="col-md-3 p-3">
            <span>Telephone</span>
            <p style="font-size: 15px; font-weight: 200">
              +91-90054-58557,&nbsp; 011-4564477
            </p>
          </div>
          <div class="col-md-3 p-3">
            <span>Devolped and Mantained by</span>
            <p style="font-size: 15px; font-weight: 200">
              <a
                href="https://linkedin.com"
                style="color: orange; text-decoration: none"
                target="_blank"
                >M. Gupta</a
              >
            </p>
          </div>
        </div>
      </div>

      <!-- ===== Footer End ===== -->
    </div>
  </body>
</html>
