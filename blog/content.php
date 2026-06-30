<?php
/*
 * Copyright 2026 Martin Espericueta
 *
 * This web page is mine :)
 */
?>
<!-- The flexible grid (content) -->
<main class="row" id="main-content">
<?php require_once('../docs/about.php'); ?>
<article class="main">
    <h2>Bloggin' 'bout Web Coding...</h2>
    <h2>This &amp; That...</h2>
    <!-- begin blogging area -->

    <article class="blog-post">
      <header>
        <h2>Should We Stop Building for the Internet When Phones Are How People Browse?</h2>
        <h3>06/30/26 - Tuesday Evening</h3>
      </header>

      <section>
        <div class="blog-image-one-off blog-photo" role="img" aria-label="Person browsing a website on a smartphone" title="Photo: Unsplash (free to use)" style="background-image: url('/images/blog/phone-browsing.jpg')"></div>
        <p>
          <strong>Short answer: yes. Longer answer: also yes, but with a plan.</strong> When I say &quot;stop building for the internet,&quot; I don&apos;t mean burn your router and move to a cabin. I mean stop pretending the desktop browser is the default customer experience. Most people find your business on a phone — in a parking lot, on a couch, in line at the grocery store, squinting through screen glare like they&apos;re decoding ancient hieroglyphs.
        </p>
        <p>
          &quot;The internet&quot; in web-design brain usually means wide layouts, hover states, giant hero banners, and navigation with enough dropdowns to qualify as a filing system. That world still exists. It&apos;s just not where your customers live anymore. Building desktop-first in 2026 is like printing a beautiful full-page newspaper ad and then wondering why nobody reads it while they&apos;re walking the dog.
        </p>
      </section>

      <section>
        <h3>The Phone Is the Front Door Now</h3>
        <div class="blog-image-one-off blog-photo" role="img" aria-label="Smartphone displaying a mobile app interface" title="Photo: Unsplash (free to use)" style="background-image: url('/images/blog/mobile-first-design.jpg')"></div>
        <p>
          Mobile traffic isn&apos;t a trend line on a chart you check once a quarter. It&apos;s the front door. If your site only feels good on a 27-inch monitor, you&apos;ve built a lovely waiting room that most visitors never enter. They hit your homepage on a five-inch screen and immediately know whether you respect their time.
        </p>
        <ul>
          <li>Tap targets big enough for actual human thumbs, not pencil erasers</li>
          <li>Text that reads without pinch-zoom archaeology</li>
          <li>Navigation that works one-handed — not a hamburger menu hiding a desktop menu that was never designed for touch</li>
          <li>Pages that load before your visitor&apos;s patience files for divorce</li>
          <li>Contact info and calls-to-action where thumbs naturally reach</li>
        </ul>
        <p>
          This isn&apos;t radical. It&apos;s manners. You&apos;re greeting guests at the entrance they actually use.
        </p>
      </section>

      <section>
        <h3>Desktop Isn&apos;t Dead — It&apos;s Just Not in Charge</h3>
        <div class="blog-image-one-off blog-photo" role="img" aria-label="Analytics dashboard showing website traffic data" title="Photo: Unsplash (free to use)" style="background-image: url('/images/blog/website-analytics.jpg')"></div>
        <p>
          Stopping desktop-first design doesn&apos;t mean abandoning desktop. It means flipping the order. Design for the phone first. Make it excellent. <em>Then</em> ask what larger screens can add without wrecking the clarity you earned. Desktop gets bonus real estate — use it for richer visuals and breathing room, not for dumping every link you&apos;ve ever considered into one horizontal navbar.
        </p>
        <p>
          I reworked my own site header because the title kept invading the navbar on small screens like an overfriendly houseguest. That&apos;s what phone-first thinking looks like in practice: you notice the friction, you fix the layout, you test on a real device instead of resizing a browser window and calling it responsive.
        </p>
      </section>

      <section>
        <h3>What to Do About Your Current Site</h3>
        <p>
          If your site was built desktop-first — especially on a free builder that &quot;auto-resizes&quot; for mobile — you&apos;re probably serving a shrunken version of a layout that was never meant to be held. Retrofitting mobile usability onto that is like adding a ramp by rearranging the stairs. Possible. Expensive. Full of compromises.
        </p>
        <p>
          Start fresh with mobile as the blueprint, or hire someone who will. Ask how they handle phone layouts. If they say &quot;it adapts automatically,&quot; ask follow-up questions with detective energy. Auto-adapting is not a strategy. Intentional mobile design is.
        </p>
        <p>
          <em>Build for the device in your customer&apos;s hand, not the monitor in your office. The internet isn&apos;t going away — but it&apos;s mostly arriving through a phone screen, and your website should act like it knows that.</em>
        </p>
        <p><small>Photos in this post are from <a href="https://unsplash.com" title="Unsplash">Unsplash</a> (free to use).</small></p>
      </section>
    </article>

    <article class="blog-post">
      <header>
        <h2>Do You &quot;Drop Down&quot; Your Menus Anymore?</h2>
        <h3>06/29/26 - Monday Afternoon</h3>
      </header>

      <section>
        <div class="blog-image-one-off blog-photo" role="img" aria-label="CSS and HTML code displayed on a developer screen" title="Photo: Unsplash (free to use)" style="background-image: url('/images/blog/css-code-screen.jpg')"></div>
        <p>
          <strong>Every few years, someone declares dropdown menus dead.</strong> Usually right after they&apos;ve fought a broken mega-menu built by a platform that treats navigation like a junk drawer. Then they pivot to hamburger icons on everything — including desktop sites — and wonder why users can&apos;t find the &quot;Services&quot; page without a treasure map and a spirit of adventure.
        </p>
        <p>
          I&apos;m here to defend the humble CSS dropdown. Not every dropdown. Not the ones that require hover precision worthy of a surgical robot. But a clean, semantic, hand-coded dropdown? Still one of the most useful tools in a desktop navigation toolkit. Yes, I said desktop. We&apos;ll get to mobile in a minute.
        </p>
      </section>

      <section>
        <h3>Why CSS Dropdowns Still Earn Their Keep</h3>
        <div class="blog-image-one-off blog-photo" role="img" aria-label="Website navigation and layout on a computer monitor" title="Photo: Unsplash (free to use)" style="background-image: url('/images/blog/web-navigation.jpg')"></div>
        <p>
          On a wide screen, dropdown menus solve a real problem: too many destinations, not enough horizontal space to shout about all of them at once. A well-built dropdown groups related links, keeps the navbar scannable, and lets users drill into subsections without a page reload. That&apos;s not laziness. That&apos;s information architecture.
        </p>
        <ul>
          <li><strong>Hover and focus support</strong> — desktop users still use mice and keyboards; <code>:hover</code> and <code>:focus-within</code> are valid interaction models</li>
          <li><strong>Semantic HTML</strong> — a <code>&lt;ul&gt;</code> inside a <code>&lt;li&gt;</code> is exactly what lists are for</li>
          <li><strong>No JavaScript required</strong> — pure CSS dropdowns are fast, resilient, and don&apos;t break when a script fails to load</li>
          <li><strong>Predictable behavior</strong> — users have seen dropdowns for decades; familiarity is a feature, not a flaw</li>
          <li><strong>Clean visual hierarchy</strong> — top-level categories stay visible; details tuck underneath like a well-organized filing cabinet</li>
        </ul>
        <p>
          The problem was never dropdowns. The problem was dropdowns implemented badly — tiny hit areas, no keyboard access, menus that vanish the millisecond your cursor twitches, and fourteen nested levels because someone confused &quot;comprehensive&quot; with &quot;hostile.&quot;
        </p>
      </section>

      <section>
        <h3>What a Good Dropdown Looks Like in 2026</h3>
        <div class="blog-image-one-off blog-photo" role="img" aria-label="Developer writing code on a laptop" title="Photo: Unsplash (free to use)" style="background-image: url('/images/blog/laptop-coding.jpg')"></div>
        <p>
          A modern CSS dropdown should be boring in the best way. It opens on hover <em>and</em> keyboard focus. It stays open long enough for a human being to move their pointer. It doesn&apos;t cover the entire viewport like a pop-up with commitment issues. And on mobile? It shouldn&apos;t be a hover menu at all — it should collapse into an accordion or a tap-to-expand pattern that respects touch.
        </p>
        <p>
          That&apos;s the part people miss when they bury the whole nav behind a hamburger on desktop: you&apos;re hiding navigation that was already working. Dropdowns aren&apos;t the enemy of mobile-first design. They&apos;re the desktop enhancement you earn <em>after</em> the phone layout is solid. Different devices, different patterns, same goal — get people where they need to go without friction.
        </p>
      </section>

      <section>
        <h3>When to Drop the Dropdown (Pun Intended)</h3>
        <p>
          Skip dropdowns when you only have four links total. Skip them when the submenu is one item — just link directly. Skip hover-only menus with zero keyboard support, because that&apos;s not a dropdown, that&apos;s an accessibility violation wearing a bow tie. And definitely skip builder-generated menus you can&apos;t style or debug when they inevitably start pointing at pages that don&apos;t exist.
        </p>
        <p>
          But if you have a real site with real sections — services, resources, about, portfolio categories — a hand-coded CSS dropdown is still a professional, lightweight, standards-friendly solution. I&apos;d rather write twenty lines of clean CSS than bolt on a JavaScript menu library that needs three polyfills and a prayer.
        </p>
        <p>
          <em>Don&apos;t drop dropdowns because they&apos;re unfashionable. Drop the bad ones. Keep the good ones. And for heaven&apos;s sake, test them with a keyboard before declaring your navigation finished.</em>
        </p>
        <p><small>Photos in this post are from <a href="https://unsplash.com" title="Unsplash">Unsplash</a> (free to use).</small></p>
      </section>
    </article>

PLACEHOLDER_TRUNCATED