<head>
    <meta charset ="UTF-8">
    <title>IHWC Main Board</title> 

    <style>
*, ::before, ::after{
    box-sizing:border-box;
}
body{
    position:relative;
    margin:0;
    overflow:hidden;
    display:flex;
    height:100vh;
    flex-direction:column;
    line-height:1.5;
    font-family:tahoma;
    font-size:79.5%;
    color:#f4f4f4;
    background-color:#1d1e22;
}

.scrolls{
    position:absolute;
    top:50%;
    transform:translateY(-50%);
    right:1.25em;
    z-index:2;
    display:flex;
    flex-direction:column;
    align-content:center;
    justify-content:center;
    text-align:center;
    font-size:2rem;
    color: #f4f4f4;
}

.scrolls .center{
    font-size:0.825rem;
}

.smooth{

    position:relative;
    width:100%;
    height:100%;
    scroll behavior:smooth;
    overflow-y:scroll;
    scroll-snap-type:mandatory;
    scroll-snap-points-y:repeat(100vh);
    scroll-snap-type: y mandatory;
}

.header{
    position:fixed;
    top:0;
    z-index:1;
    display:flex;
    width:100%;
    min-height:59px;
    font-size:1rem;
    background-image:linear-gradient(180deg,#1d1e22,rgba(29,30,34,0.1),transparent);
    mix-blend-mode:luminosity;
}

.header ul{
    margin: 0;
    padding: 0;
    list-style: none;
    display:flex;
    width:100%;
    justify-content:center;
}


         

    </style>



</head>

<body>
    

    <div class="smooth">
        <div class ="header">

            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#appointment">Appointment</a></li>
                <li><a href="#announcement">Announcement</a></li>
                <li><a href="#prescription">Prescription</a></li>
             </ul>
        </div>
    </div>

    <section id = "home">
        <h2>Full Page Scroll</h2>
    </section>

    <section id = "Appointment">
        <h2>Appointment</h2>
    </section>

    <section id = "Announcement">
        <h2>Announcement</h2>
    </section>

    <section id = "Prescription">
        <h2>Prescription</h2>
    </section>



</body>