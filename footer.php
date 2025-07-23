<footer style="background-color: #111; color: #fff; padding: 40px 0; font-family: Arial, sans-serif;">
  <style>
    .wrap-content {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    .footertong {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: flex-start;
      gap: 20px;
    }
    .footer1, .footer2, .footer3 {
      flex: 1 1 300px;
    }
    .footer1 h2, .footer2 h4, .footer3 h4, .map-footer .bando1 {
      color: #ff9900;
      margin-bottom: 20px;
    }
    .flex {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }
    .flex img {
      margin-right: 10px;
      filter: brightness(0) invert(1);
    }
    a {
      color: #fff;
      text-decoration: none;
    }
    a:hover {
      color: #ff9900;
    }
    .socialfooter {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 10px;
      justify-content: center;
    }
    .socialfooter a img {
      width: 39px;
      height: 39px;
      border-radius: 50%;
      background: #333;
    }
    .footer2 p {
      text-align: center;
    }
    .footer2 img {
      max-width: 100%;
    }
    .map-footer {
      margin-top: 40px;
      text-align: center;
    }
    .map-footer iframe {
      width: 100%;
      max-width: 100%;
      height: 380px;
      border: none;
      border-radius: 500px; 
    }
    .copyright {
      text-align: center;
      margin-top: 30px;
      font-size: 14px;
      color: #aaa;
    }
    .copyright span {
      color: orange;
    }
  </style>

  <div class="wrap-content">
    <div class="footertong">
      <!-- LEFT -->
      <div class="footer1">
        <h2>Soojin BBQ</h2>
        <div class="thongtinfooterchung">
          <div class="flex">
            <img src="./assets/images/diachift.png" alt="Địa chỉ" width="30" height="30">
            <span>Địa chỉ: Số 153 đường tỉnh 835, khu phố thanh ba, Cần Giuộc</span>
          </div>
          <div class="flex">
            <img src="./assets/images/hotlineft.png" alt="Hotline" width="30" height="30">
            <span>Hotline: 034 325 2831</span>
          </div>
          <div class="flex">
            <img src="./assets/images/emailft.png" alt="Email" width="30" height="30">
            <span>Email: vuaoc01011959@gmail.com</span>
          </div>
          <div class="flex">
            <img src="./assets/images/websiteft.png" alt="Website" width="30" height="30">
            <span>Website: <a href="http://detuoinamphat.com" target="_blank">http://detuoinamphat.com</a></span>
          </div>
          <div class="flex">
            <img src="./assets/images/gmcft.png" alt="Giờ mở cửa" width="30" height="30">
            <span>Giờ mở cửa: 10h - 22h (Cả tuần)</span>
          </div>
        </div>
      </div>

      <!-- CENTER -->
      <div class="footer2 text-center">
        <p><img src="http://demo130.ninavietnam.org/thang07_2025/soojinbbq_0890425w/upload/filemanager/files/logoft(2).png" alt="Logo Soojin" width="141" height="160"></p>
        <h4>Mạng xã hội</h4>
        <div class="socialfooter">
          <?php
          $socials = [1, 2, 3, 4, 5];
          foreach ($socials as $i) {
            echo '<a href="#"><img src="http://demo130.ninavietnam.org/thang07_2025/soojinbbq_0890425w/thumbs/39x39x1/upload/photo/mxh' . $i . '-17519431' . ($i + 7) . '.png.webp" alt="mxh' . $i . '"></a>';
          }
          ?>
        </div>
      </div>

      <!-- RIGHT -->
      <div class="footer3 text-center">
        <h4>Fanpage Facebook</h4>
        <div class="fb-page">
          <iframe src="https://www.facebook.com/plugins/page.php?href=https://www.facebook.com/facebook&tabs=timeline&width=328&height=213" width="328" height="213" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true"></iframe>
        </div>
      </div>
    </div>

    <!-- MAP -->
    <div class="map-footer">
      <div class="bando1">Bản đồ</div>
      <div class="bando2">Soojin BBQ</div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4544374621787!2d106.62420897502696!3d10.85299925777668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bee0b0ef9e5%3A0x5b4da59e47aa97a8!2zQ8O0bmcgVmnDqm4gUGjhuqduIE3hu4FtIFF1YW5nIFRydW5n!5e0!3m2!1svi!2s!4v1728287136105!5m2!1svi!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- COPYRIGHT -->
    <div class="copyright">
      <p>© Copyright <span>Soojin BBQ</span>. Designed by Nina</p>
    </div>
  </div>
</footer>
