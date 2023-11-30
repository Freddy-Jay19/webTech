<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Dashboard</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}
body {
    position: relative;
    width: 100%;
}
.header {
    height: 60px;
    width: 100%;
    display: flex;
    align-items: center;
    border-bottom: 2px solid #f1f1f1;
}
.logo {
    display: flex;
    align-items: center;
    width: 300px;
    padding-left: 40px;
}
.logo span {
    color: #5073fb;
}
.search--notification--profile {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: calc(100% - 300px);
    padding: 0 40px;
}
.search {
    background-color: #f1f4f8;
    border-radius: 50px;
    width: 400px;
    padding: 5px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.search input {
    background-color: transparent;
    outline: none;
    border: none;
    text-indent: 15px;
    width: 85%;
}
.search button {
    outline: none;
    border: none;
    border-radius: 50%;
    background-color: #fff;
    padding: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.search button i {
    font-size: 1.1rem;
    color: #5073fb;
}
.notification--profile {
    display: flex;
    align-items: center;
}
.picon {
    margin-left: 20px;
    font-size: 1.1rem;
    padding: 5px;
    border-radius: 5px;
}
.lock {
    color: #5073fb;
    background-color: rgba(80, 115, 251, .2);
}
.bell {
    color: #f1d243;
    background-color: rgba(241, 210, 67, .2);
}
.chat {
    color: #70d7a5;
    background-color: rgba(112, 215, 165, .2);
}
.profile {
    position: relative;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
}
img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.main {
    position: relative;
    width: 100%;
    min-height: calc(100vh - 60px);
}l
.sidebar {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 300px;
    background-color: #fff;
    padding: 30px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    border-right: 2px solid #f1f1f1;
    transition: .3s;
}
.sidebar.active {
    width: 103px;
    overflow: hidden;
}
.sidebar.active .sidebar--item {
    display: none;
}
li {
    list-style: none;
}
a {
    text-decoration: none;
}
.sidebar--items a,
.sidebar--bottom-items a {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    font-size: 1.1rem;
    color: #000;
    padding: 10px;
    border-radius: 10px;
}
.sidebar--items a:hover,
.sidebar--bottom-items a:hover {
    
    color: #fff;
}
#active--link {
    
    color: black;
}
.sidebar--bottom-items li:last-child a {
    margin-bottom: 0;
}
.icon {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    font-size: 1.3rem;
}
.icon-0 {
    color: #5073fb;
}
.icon-1 {
    color: #c5bc58;
}
.icon-2 {
    color: #a280e9;
}
.icon-3 {
    color: #85ade3;
}
.icon-4 {
    color: #e36ac8;
}
.icon-5 {
    color: #70d7a5;
}
.icon-6 {
    color: #5f5ce0;
}
.icon-7 {
    color: #e86786;
}
.icon-8 {
    color: #f1d243;
}
/* main--content */
.main--content {
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: calc(100% - 300px);
    padding: 0 40px;
    overflow-y: scroll;
    transition: .3s;
}
.main--content.active {
    width: calc(100% - 103px);
}
.title {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 10px;
    margin-top: 30px;
}
.section--title {
    font-weight: 400;
}
.dropdown {
    outline: none;
    border: none;
    background-color: #f1f4f8;
    border-radius: 5px;
    width: 150px;
    padding: 5px;
}
.cards {
    display: flex;
    gap: 20px;
}
.card {
    padding: 20px;
    border-radius: 20px;
    min-width: 230px;
    height: auto;
    transition: .3s;
}
.card:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
.card--data {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
}
.card h1 {
    font-size: 30px;
    margin-top: 10px;
}
.card--icon--lg {
    font-size: 80px;
}
.card--stats {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 5px;
}
.card--stats span {
    display: flex;
    align-items: center;
}
.card--icon {
    margin-right: 5px;
}
.stat--icon {
    color: #5f5ce0;
}
.up--arrow {
    color: #70d7a5;
}
.down--arrow {
    color: #e86786;
}
.card-1 {
    background-color: rgba(80, 115, 251, .1);
}
.card-1 .card--title {
    color: rgba(80, 115, 251, 1);
}
.card-1 .card--icon--lg {
    color: rgba(80, 115, 251, .4);
}
.card-2 {
    background-color: rgba(241, 210, 67, .1);
}
.card-2 .card--title {
    color: rgba(241, 210, 67, 1);
}
.card-2 .card--icon--lg {
    color: rgba(241, 210, 67, .4);
}
.card-3 {
    background-color: rgba(112, 215, 165, .1);
}
.card-3 .card--title {
    color: rgba(112, 215, 165, 1);
}
.card-3 .card--icon--lg {
    color: rgba(112, 215, 165, .4);
}
.card-4 {
    background-color: rgba(227, 106, 200, .1);
}
.card-4 .card--title {
    color: rgba(227, 106, 200, 1);
}
.card-4 .card--icon--lg {
    color: rgba(227, 106, 200, .4);
}
/* doctors */
.doctors--right--btns {
    display: flex;
    align-items: center;
    gap: 30px;
}
.add {
    display: flex;
    align-items: center;
    padding: 5px 10px;
    outline: none;
    border: none;
    background-color: #5073fb;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
    transition: .3s;
}
.add:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
.add i {
    margin-right: 10px;
    padding: 5px;
    background-color: #fff;
    border-radius: 50%;
    color: #000;
}
.doctors--cards {
    display: flex;
    gap: 20px;
}
.doctor--card {
    padding: 20px;
    border-radius: 20px;
    height: auto;
    transition: .3s;
    border: 2px solid #f1f1f1;
    display: flex;
    flex-direction: column;
    align-items: center;
    font-size: .8rem;
}
.doctor--card:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
.img--box--cover {
    border: 1px solid #5073fb;
    padding: 2px;
    border-radius: 50%;
    display: inline-block;
    margin-bottom: 10px;
}
.img--box {
    position: relative;
    width: 71px;
    height: 71px;
    overflow: hidden;
    border-radius: 50%;
}
.free {
    color: #70d7a5;
}
.scheduled {
    color: #5073fb;
}
/* recent--patients */
.recent--patients {
    margin-bottom: 20px;
}
.table {
    height: 200px;
    overflow-y: scroll;
}
table {
    width: 100%;
    text-align: left;
    border-collapse: collapse;
}
tr {
    border-bottom: 1px solid #f1f1f1;
}
td,
th {
    padding-block: 10px;
}
.edit {
    color: #70d7a5;
    margin-right: 10px;
}
.delete {
    color: #e86786;
}
.pending {
    color: #f1d243;
}
.confirmed {
    color: #70d7a5;
}
.rejected {
    color: #e86786;
}
/* responsive starts here */
@media screen and (max-width:1350px) {
    .cards,
    .doctors--cards {
        overflow-x: scroll;
    }
}
@media screen and (max-width:1024px) {
    table {
        min-width: 600px;
    }
}
@media screen and (max-width:768px) {
    .logo {
        padding-left: 30px;
        width: fit-content;
    }
    .search--notification--profile {
        padding: 0 20px;
        margin-left: auto;
    }
    .main--content {
        padding: 0 20px;
    }
    .sidebar {
        padding: 20px;
    }
    .sidebar.active {
        width: 85px;
    }
    .main--content.active {
        width: calc(100% - 85px);
    }
}
@media screen and (max-width:590px) {
    .search,
    .lock,
    .chat {
        display: none;
    }
    .notification--profile {
        margin-left: auto;
    }
    .search--notification--profile {
        width: fit-content;
    }
    .sidebar {
        transform: translateX(-100%);
        z-index: 10;
        background-color: #fff;
    }
    .sidebar.active {
        transform: translateX(0);
        width: 300px;
    }
    .sidebar.active .sidebar--item {
        display: block;
    }
    .main--content {
        width: calc(100% - 0px);
    }
    .main--content.active {
        width: calc(100% - 0px);
    }
}
@media screen and (max-width:450px) {
    .doctor--filter {
        display: none;
    }
    .main--content {
        padding: 0 10px;
    }
    .logo {
        padding-left: 10px;
    }
    .search--notification--profile {
        padding: 0 10px;
    }
    .sidebar {
        padding: 10px;
    }
}
</style>
<body>
    <section class="header">
        <div class="logo">
            <i class="ri-menu-line icon icon-0 menu"></i>
            <h2>SILVA<span>PLATTER</span></h2>
        </div>
        <div class="search--notification--profile">
            <div class="search">
                <input type="text" placeholder="Search">
                <button><i class="ri-search-2-line"></i></button>
            </div>
            
        </div>
    </section>
    <section class="main">
        <div class="sidebar">
            <ul class="sidebar--items">
                <li>
                    <a href="#" id="active--link">
                        <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                        <span class="sidebar--item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-2"><i class="ri-calendar-2-line"></i></span>
                        <span class="sidebar--item">Report</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-3"><i class="ri-user-2-line"></i></span>
                        <span class="sidebar--item" style="white-space: nowrap;">Workers</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-4"><i class="ri-user-line"></i></span>
                        <span class="sidebar--item">Customers</span>
                    </a>
                </li>
                
            </ul>
            <ul class="sidebar--bottom-items">
                <li>
                    <a href="#">
                        <span class="icon icon-7"><i class="ri-settings-3-line"></i></span>
                        <span class="sidebar--item">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-8"><i class="ri-logout-box-r-line"></i></span>
                        <span class="sidebar--item">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main--content">
            <div class="overview">
                <div class="title">
                    <h2 class="section--title">Overview</h2>
                    <select name="date" id="date" class="dropdown">
                        <option value="today">Today</option>
                        <option value="lastweek">Last Week</option>
                        <option value="lastmonth">Last Month</option>
                        <option value="lastyear">Last Year</option>
                        <option value="alltime">All Time</option>
                    </select>
                
                </div>
                <div class="cards">
                    <div class="card card-1">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Workers</h5>
                                <h1>152</h1>
                            </div>
                            <i class="ri-user-2-line card--icon--lg"></i>
                        </div>
                    </div>
                        
                    <div class="card card-2">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Customers</h5>
                                <h1>1145</h1>
                            </div>
                            <i class="ri-user-line card--icon--lg"></i>
                        </div>
                    </div>    
                    <div class="card card-3">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Report</h5>
                                <h1>102</h1>
                            </div>
                            <i class="ri-calendar-2-line card--icon--lg"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Service">
                <div class="title">
                    <h2 class="section--title">Services</h2>
                    <div class="doctors--right--btns">
                        <select name="date" id="date" class="dropdown doctor--filter">
                            <option >Filter</option>
                            <option value="scheduled">Scheduled</option>
                        </select>
                        <button class="add"><i class="ri-add-line"></i>Add Service</button>
                    </div>
                </div>
                <div class="doctors--cards">
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="repair.jpg" alt="">
                            </div>
                        </div>
                        <p class="free"></p>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="rrr.jpg" alt="">
                            </div>
                        </div>
                      
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="down.jpeg" alt="">
                            </div>
                        </div>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="assets/images/doctor4.jpg" alt="">
                            </div>
                        </div>
                        <p class="free">Free</p>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="assets/images/doctor5.jpg" alt="">
                            </div>
                        </div>
                        <p class="scheduled">Scheduled</p>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="assets/images/doctor6.jpg" alt="">
                            </div>
                        </div>
                        <p class="free">Free</p>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="OIP.jpg" alt="">
                            </div>
                        </div>
                        <p class="scheduled">Scheduled</p>
                    </a>
                </div>
            </div>
            <div class="recent--customers">
                <div class="title">
                    <h2 class="section--title">Recent Customers</h2>
                    <button class="add"><i class="ri-add-line"></i>Add Customers</button>
                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Vehicle Type</th>
                                <th>Vehicle Number</th>  
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Freddy jay</td>
                                <td>Benz</td>
                                <td>GR- 534367</td>
                                <td class="confirmed">Confirmed</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                            <tr>
                                <td>Abam Dugruludu</td>
                                <td>Toyata</td>
                                <td>DV-54</td>                            
                                <td class="confirmed">Confirmed</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                            <tr>
                                <td>KK Rasta</td>
                                <td>Aboboyaa</td>
                                <td>TD-2343</td>                            
                                <td class="confirmed">Confirmed</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                            <tr>
                                <td>Jay Smoke</td>
                                <td>BMW</td>
                                <td>DV-893687</td>                            
                                <td class="confirmed">Confirmed</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/main.js"></script>
</body>
</html>