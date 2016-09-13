<?php
// src/AppBundle/Controller
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class first
{
    /**
     * @Route("/life/better")
     */
    public function numberAction()
    {
       return new Response('The life is better!');
    }
}
?>

<div id="SocialMediaContent1"> 
<a class="twitter-timeline" href="https://twitter.com/TwitterDev/timelines/539487832448843776">National Park Tweets - Curated tweets by TwitterDev</a> 
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
