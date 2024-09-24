@include('component.cabecalho')
  <style>
    .map-container-section {
      overflow:hidden;
      /* padding-bottom:56.25%; */
      position:relative;
      height:0;
      background-color: black;
    }
  .map-container-section iframe {
      left:0;
      top:0;
      height:100%;
      width:100%;
      position:absolute;
      margin-top: 15px;
      background-color: black;
    }

    body {
  background-color: black;
}
  </style>
</head>
<body>
    <section>
      <div id="map-container-demo-section" class="z-depth-1-half map-container-section mt-5" style="height: 500px ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.64361719287!2d-46.47849478336122!3d-23.545317125067573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66dec98fb855%3A0xf2b061ffbcd2ecf8!2sNeo%20Qu%C3%ADmica%20Arena!5e0!3m2!1spt-BR!2sus!4v1663436376542!5m2!1spt-BR!2sus">
      </div>
    </section>
</body>
</html>