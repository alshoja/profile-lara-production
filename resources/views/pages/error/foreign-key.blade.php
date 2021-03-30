@extends('pages/error/default')
<h1> Error ! </h1>
<p class="zoom-area"><b>Cannot delete a item having connected data</b></p>
<section class="error-container">
    <span>2</span>
    <span><span class="screen-reader-text">0</span></span>
    <span>0</span>
</section>
<div class="link-container">
    <a  href="{{ url()->previous() }}" class="more-link">Back</a>
</div>