@extends('layouts.main')

@section('headline')
<div class="container">
        <header>
            <h1>Mobile Web Development</h1>
            <p>Building Mobile Web Experiences</p>
        </header>
        <div id="blurb">
            <p>So you've heard mobile is kind of a big deal, and you're not sure how to transform your traditional desktop-focused web apps into fast, effective multi-device experiences.</p>
            <p>This course is designed to teach web developers what they need to know to create great cross-device web experiences.</p>
            <p>This course will focus on building mobile-first web apps, which will work across multiple platforms including:</p>
            <ul>
                <li>Android,
                <li>iOS,
                <li>and others.
            </ul>
        </div>
        <form method="post" id="register">
            <h2>Register for the launch</h2>
            <label for="name">Name</label>
            <input type="text" name="name" id="name"
                   placeholder="Thomas A Anderson" required>
            <label for="email">Email address</label>
            <input type="email" name="email" id="email"
                   placeholder="neo@example.com" required>
            <label for="tel">Telephone</label>
            <input type="tel" name="tel" id="tel"
                   placeholder="(555) 555 5555" required>
            <input type="submit" value="Sign up">
        </form>
        <br>
    </div>
@endsection

@section('section1')
 <div class="container">
        <h2>What will I learn?</h2>
        <p>After completing this class, you'll have built a web application with a first-class mobile experience.</p>
        <p>You'll understand what it takes to:</p>
        <ul>
            <li>build great web experiences on mobile devices</li>
            <li>use the tools you need to test performance</li>
            <li>apply your knowledge to your own projects in the future</li>
        </ul>
        <video controls poster="udacity.png">
            <source src="{{asset('video/udacity.webm')}}" type="video/webm"></source>
            <p>Sorry your browser doesn't support video.
                <a href="udacity.mov">Download the video</a>.
            </p>
        </video>
        <br>
    </div>
</div>
@endsection

@section('section2')
<div class="container">
        <h2>Who will teach me?</h2>
        <p>Some of the world's leading web developers.</p>
        <div id="images">
            <img src="{{asset('images/chriswilson.png')}}" alt="Chris Wilson Course Instructor">
            <img src="{{asset('images/peterlubbers.png')}}" alt="Peter Lubbers Course Instructor">
            <img src="{{asset('images/seanbennett.png')}}" alt="Sean Bennet Course Developer">
        </div>
        <br>
    </div>
</div>
@endsection

@section('section3')
    <div class="container">
        <h2>Mobile. Why should I care?</h2>
        <p>It is huge.  Everywhere.</p>
        <table>
            <caption>
                <p>Data from <a href="http://gs.statcounter.com/#desktop+mobile+tablet-comparison-ww-monthly-201303-201403">StatsCounter</a></p>
            </caption>
            <thead>
            <tr>
                <th>Country</th>
                <th>Desktop share</th>
                <th>Tablet share</th>
                <th>Mobile share</th>
            </tr>
            </thead>
            <colgroup>
                <col span="1">
                <col span="1">
                <col span="1">
                <col span="1">
            </colgroup>
            <tbody>
            <tr>
                <td data-th="Country"><a href="http://gs.statcounter.com/#desktop+mobile+tablet-comparison-IN-monthly-201303-201403">India</a></td>
                <td data-th="Desktop share">32%</td>
                <td data-th="Table share">1%</td>
                <td data-th="Mobile share">67%</td>
            </tr>
            <tr>
                <td data-th="Country"><a href="http://gs.statcounter.com/#desktop+mobile+tablet-comparison-GB-monthly-201303-201403">GB</a></td>
                <td data-th="Desktop share">69%</td>
                <td data-th="Table share">13%</td>
                <td data-th="Mobile share">18%</td>
            </tr>
            <tr>
                <td data-th="Country"><a href="http://gs.statcounter.com/#desktop+mobile+tablet-comparison-US-monthly-201303-201403">US</a></td>
                <td data-th="Desktop share">69%</td>
                <td data-th="Table share">9%</td>
                <td data-th="Mobile share">22%</td>
            </tr>
            <tr>
                <td data-th="Country"><a href="http://gs.statcounter.com/#desktop+mobile+tablet-comparison-CN-monthly-201303-201403">China</a></td>
                <td data-th="Desktop share">86%</td>
                <td data-th="Table share">4%</td>
                <td data-th="Mobile share">10%</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection

@section('footer')
<div class="container">
        <p>We always need a footer.</p>
    </div>
@endsection
