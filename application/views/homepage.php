<div class="row">
    {authors}
    <style>
        body {
            background: #ffffff;
        }
        .homepage-actor {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
            width: 200px;
            display: inline-block;
            margin: 10px;
        }
        .homepage-actor:hover {
            background-color: lightgray;
        }
    </style>
    <a href="/welcome/show/{key}">
        <div class="homepage-actor" style="">
            <h4>{who}</h4>
            <!--<a href ="/welcome/show/{key}">-->
                <img src="/pix/{who}.jpg" title="{who} plays {role}"/>
<!--            </a>
-->
        </div>
    </a>

    {/authors}
</div>