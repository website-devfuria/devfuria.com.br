---
layout:      basico3
title:       "Flutuando divs - float: right"
description:
---

<ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="../">index</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../float-none/">float: none</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../float-left/">float: left</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../float-right/">float: right</a>
  </li>
</ul>


<pre>
div {
  ...
  float: right;
}
</pre>

<!-- resultado -->
<div>1</div>
<div>2</div>
<div>3</div>

<style>
div {
  background-color: red;
  width: 100px;
  line-height: 100px;
  text-align: center;
  margin: 5px;
  float: right;
}
</style>
