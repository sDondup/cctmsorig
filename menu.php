<?php include "connection.php"; ?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="/script/jquery.js"></script>
<script type="text/javascript" src="/script/bootstrap.min.js"></script>
<title>TMS</title>
<style>
    body {
        margin-top: 150px;
        padding-bottom: 50px;
        font-family: Times;
    }

    .navbar {
        background-color: #4E698C;
        position: fixed;
        top: 0;
        left: 0px;
        right: 0px;
        z-index: 1000; /* Ensure the navbar is on top */
    }

    .navbar a {
        float: left;
        font-size: 15px;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 20px;
    }

    .dropdown {
        float: left;
        overflow: hidden;
    }

    .dropdown .dropbtn {
        font-size: 15px;    
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
        font-size: 20px;
    }

    .navbar a:hover, .dropdown:hover .dropbtn {
        background-color: #83CAF2;
        cursor: pointer;
        transition-duration: 0.5s;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        z-index: 1100; /* Higher than the navbar */
        top: 99%; /* Position it below the button */
    }

    .dropdown-content a {
        float: none;
        color: white;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
        background-color: #333;
        font-size: 20px;
    }

    .dropdown-content a:hover {
        background-color: #83CAF2;
    }

    .dropdown-content .sub a:hover {
        float: left;
        font-size: 15px;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    #healthdatabase {
        max-width: 100%;
        height: auto;
    }

    .sticky-header {
        position: sticky;
        top: 50px;
        z-index: 100; /* Lower than the navbar and dropdown */
    }
    /* Submenu container */
    .dropdown-submenu {
        position: relative;
    }

    /* Submenu content */
    .submenu-content {
        display: none;
        position: absolute;
        left: 100%;
        top: 0;
        background-color: #333;
        min-width: 200px;
        z-index: 1200;
    }

    /* Show submenu on hover */
    .dropdown-submenu:hover .submenu-content {
        display: block;
    }

    /* Submenu links */
    .submenu-content a {
        color: white;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        background-color: #333;
        font-size: 18px;
    }

    .submenu-content a:hover {
        background-color: #83CAF2;
    }
</style>
</head>
<body>

<div class="navbar">
<img src="/img/tms.png" id="healthdatabase">

<a href="home.php">Home</a>

<div class="dropdown">
    <button class="dropbtn">Members</button>
        <div class="dropdown-content">
        <a href="member2526.php">Members 2025-26</a>
        <a href="member2425.php">Members 2024-25</a>
        <a href="member2324.php">Members 2023-24</a>
        <a href="member2223.php">Members 2022-23</a>
        <a href="member2122.php">Members 2021-22</a>
        <a href="member2021.php">Members 2020-21</a>
        <a href="member1920.php">Members 2019-20</a>
        <a href="member1819.php">Members 2018-19</a>
        <a href="member1718.php">Members 2017-18</a>
        <a href="member1617.php">Members 2016-17</a>
        <a href="member1516.php">Members 2015-16</a>
        <a href="member1415.php">Members 2014-15</a>
        <a href="member1314.php">Members 2013-14</a>
        <a href="member1213.php">Members 2012-13</a>
        </div>
</div> 

<div class="dropdown">
    <button class="dropbtn">Claimant</button>
        <div class="dropdown-content">
        <a href="claim2526.php">Claimant 2025-26</a>
        <a href="claim2425.php">Claimant 2024-25</a>
        <a href="claim2324.php">Claimant 2023-24</a>
        <a href="claim2223.php">Claimant 2022-23</a>
        <a href="claim2122.php">Claimant 2021-22</a>
        <a href="claim2021.php">Claimant 2020-21</a>
        <a href="claim1920.php">Claimant 2019-20</a>
        <a href="claim1819.php">Claimant 2018-19</a>
        <a href="claim1718.php">Claimant 2017-18</a>
        <a href="claim1617.php">Claimant 2016-17</a>
        <a href="claim1516.php">Claimant 2015-16</a>
        <a href="claim1415.php">Claimant 2014-15</a>
        <a href="claim1314.php">Claimant 2013-14</a>
        <a href="claim1213.php">Claimant 2012-13</a>
        </div>
</div> 

<div class="dropdown">
    <button class="dropbtn">Report▸</button>
    <div class="dropdown-content">
        <div class="dropdown-submenu">
            <a href="#">Members Report▸</a>
            <div class="submenu-content">
                <a href="reportMember2526.php">2025-26</a>
                <a href="reportMember2425.php">2024-25</a>
                <a href="reportMember2324.php">2023-24</a>
                <a href="reportMember2223.php">2022-23</a>
                <a href="reportMember2122.php">2021-22</a>
                <a href="reportMember2021.php">2020-21</a>
                <a href="reportMember1920.php">2019-20</a>
                <a href="reportMember1819.php">2018-19</a>
                <a href="reportMember1718.php">2017-18</a>
                <a href="reportMember1617.php">2016-17</a>
                <a href="reportMember1516.php">2015-16</a>
            </div>
        </div>
        <div class="dropdown-submenu">
            <a href="#">Claims Report▸</a>
            <div class="submenu-content">
                <a href="reportClaim2526.php">2025-26</a>
                <a href="reportClaim2425.php">2024-25</a>
                <a href="reportClaim2324.php">2023-24</a>
                <a href="reportClaim2223.php">2022-23</a>
                <a href="reportClaim2122.php">2021-22</a>
                <a href="reportClaim2021.php">2020-21</a>
                <a href="reportClaim1920.php">2019-20</a>
                <a href="reportClaim1819.php">2018-19</a>
                <a href="reportClaim1718.php">2017-18</a>
                <a href="reportClaim1617.php">2016-17</a>
                <a href="reportClaim1516.php">2015-16</a>
            </div>
        </div>
        <div class="dropdown-submenu">
            <a href="#">Rejection List▸</a>
            <div class="submenu-content">
                <a href="rejection2526.php">2025-26</a>
                <a href="rejection2425.php">2024-25</a>
                <a href="rejection2324.php">2023-24</a>
                <a href="rejection2223.php">2022-23</a>
                <a href="rejection2122.php">2021-22</a>
                <a href="rejection2021.php">2020-21</a>
                <a href="rejection1920.php">2019-20</a>
                <a href="rejection1819.php">2018-19</a>
                <a href="rejection1718.php">2017-18</a>
                <a href="rejection1617.php">2016-17</a>
                <a href="rejection1516.php">2015-16</a>
                <a href="rejection1415.php">2014-15</a>
            </div>
        </div>
        <div class="dropdown-submenu">
            <a href="#">Contribution▸</a>
            <div class="submenu-content">
                <a href="contribution2526.php">2025-26</a>
                <a href="contribution2425.php">2024-25</a>
                <a href="contribution2324.php">2023-24</a>
                <a href="contribution2223.php">2022-23</a>
                <a href="contribution2122.php">2021-22</a>
                <a href="contribution2021.php">2020-21</a>
                <a href="contribution1920.php">2019-20</a>
                <a href="contribution1819.php">2018-19</a>
                <a href="contribution1718.php">2017-18</a>
                <a href="contribution1617.php">2016-17</a>
                <a href="contribution1516.php">2015-16</a>
            </div>
        </div>
        <div class="dropdown-submenu">
            <a href="#">Tibet Fund Report▸</a>
            <div class="submenu-content">
                <a href="subgenderwise2025.php">Sub Gender Wise</a>
                <a href="subPM2425.php">Sub Primary Members</a>
                <a href="tibfundRenewal2025.php">Sub Renewal Wise</a>
                <a href="claimpayment2025.php">Claims Payment</a>
            </div>
        </div>
    </div>
</div>

<div class="dropdown">
    <button class="dropbtn">Summary▸</button>
    <div class="dropdown-content">
        <div class="dropdown-submenu">
            <a href="#">Members Summary▸</a>
            <div class="submenu-content">
                <a href="summaryMem2526.php">2025-26</a>
                <a href="summaryMem2425.php">2024-25</a>
                <a href="summaryMem2324.php">2023-24</a>
                <a href="summaryMem2223.php">2022-23</a>
                <a href="summaryMem2122.php">2021-22</a>
                <a href="summaryMem2021.php">2020-21</a>
                <a href="summaryMem1920.php">2019-20</a>
                <a href="summaryMem1819.php">2018-19</a>
                <a href="summaryMem1718.php">2017-18</a>
                <a href="summaryMem1617.php">2016-17</a>
                <a href="summaryMem1516.php">2015-16</a>
            </div>
        </div>
        <div class="dropdown-submenu">
            <a href="#">Claims Summary▸</a>
            <div class="submenu-content">
                <a href="summaryCla2526.php">2025-26</a>
                <a href="summaryCla2425.php">2024-25</a>
                <a href="summaryCla2324.php">2023-24</a>
                <a href="summaryCla2223.php">2022-23</a>
                <a href="summaryCla2122.php">2021-22</a>
                <a href="summaryCla2021.php">2020-21</a>
                <a href="summaryCla1920.php">2019-20</a>
                <a href="summaryCla1819.php">2018-19</a>
                <a href="summaryCla1718.php">2017-18</a>
                <a href="summaryCla1617.php">2016-17</a>
                <a href="summaryCla1516.php">2015-16</a>
            </div>
        </div>
    </div>
</div>

<div class="dropdown">
    <button class="dropbtn">Documents</button>
        <div class="dropdown-content">
        <a href="packages23.php">Packages List</a>
        <a href="subsidize.php">Subsidize Details</a>
        <a href="amount.php">Amount Details</a>
        <a href="handbook.php">TMS Handbook</a>
        <a href="forms.php">Forms</a>
        </div>
</div> 

<a href="http://172.28.9.44" style="float: right; padding: 14px 16px;">
  <img src="/img/logout.png" alt="Log out" style="height: 24px; vertical-align: middle;">
</a>

<div class="dropdown">
    <button class="dropbtn">
       <img src="/img/Others.png" alt="Others" style="height: 24px; vertical-align: middle; filter: brightness(0) invert(1);">
    </button>
    <div class="dropdown-content">
        <a href="/TMS/home.php">TMS</a>
        <a href="/Nyamthak/home.php">Nyamthak</a>
        <a href="/StaffMedical/home.php">Staff Medical</a>
        <a href="/TvhaMedical/home.php">TVHA Medical</a>
    </div>
</div>

</div> 
</body>
</html>
