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
        <h2>When Good Code Meets Bad Luck: A Week of Web Standards, FileZilla, and PHP 7.4</h2>
        <h3>06/17/26 - Tuesday Evening</h3>
      </header>

      <section>
        <div class="blog-image-one-off blog-photo" role="img" aria-label="Laptop with code editor open on a desk" title="Photo: Unsplash (free to use)" style="background-image: url('/images/blog/web-dev-laptop.jpg')"></div>
        <p>
          <strong>So I finally sat down to make my own website practice what it preaches.</strong> Accessibility, semantic HTML, SEO-friendly markup — I talk about all of that on my services page. But when I actually ran a standards check on my local Apache setup? Oh boy. It was like hiring a building inspector for a house you built yourself and hearing them tap the walls going, <em>&quot;Hmm. Interesting choices.&quot;</em>
        </p>
        <p>
          The good news: my PHP include setup — <code>header.php</code>, <code>navbar.php</code>, <code>content.php</code>, <code>footer.php</code> — is a solid pattern. One shell, swap the middle. Very &quot;reusable template files,&quot; very hand-coded, very me. The bad news: the HTML inside those includes had issues. Wrong ARIA roles, duplicate <code>&lt;h1&gt;</code> tags, inline styles everywhere, and a contact modal that only worked on the homepage because the JavaScript lived in one file instead of a shared script. Classic spaghetti — except the noodles were spread across four PHP files.
        </p>
      </section>

      <section>
        <h3>Apache Had Its Own Opinion</h3>
        <div class="blog-image-one-off blog-photo" role="img" aria-label="Rows of servers in a data center" title="Photo: Unsplash (free to use)" style="background-image: url('/images/blog/server-room.jpg')"></div>
        <p>
          Before I could even validate anything, Apache decided to throw a 403 at me. Why? Because my <code>DocumentRoot</code> still pointed at a <code>testing/</code> folder I had already deleted. So localhost was basically serving an error page while my real site sat in <code>/srv/http</code> like a patient dog waiting to be let inside.
        </p>
        <p>
          Arch Linux, as always, was helpful in the most unhelpful way: technically correct, emotionally devastating. One line in <code>httpd.conf</code>, one <code>systemctl reload httpd</code>, and suddenly the site loaded. I celebrated for approximately eleven seconds before the HTML validator reported <strong>111 errors</strong>.
        </p>
      </section>

      <section>
        <h3>Fixing the Markup (Without Crying)</h3>
        <div class="blog-image-one-off blog-photo" role="img" aria-label="HTML and CSS code displayed on a computer monitor" title="Photo: Unsplash (free to use)" style="background-image: url('/images/blog/code-screen.jpg')"></div>
        <p>
          We cleaned up a lot. Swapped a misused <code>role=&quot;contentinfo&quot;</code> for a proper <code>&lt;main&gt;</code> landmark. Moved inline styles into <code>styles.css</code>. Fixed form fields to use <code>type=&quot;email&quot;</code> and <code>type=&quot;tel&quot;</code> instead of plain text inputs pretending to be fancy. Pulled the contact slideout into its own <code>contact-modal.php</code> include and shared the open/close logic in <code>scripts.js</code> so the nav &quot;contact us&quot; link works on every page.
        </p>
        <ul>
          <li>Semantic landmarks: <code>&lt;header&gt;</code>, <code>&lt;nav&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;footer&gt;</code></li>
          <li>Keyboard focus styles for people who tab through links (like civilized humans)</li>
          <li>A shared contact modal with <code>role=&quot;dialog&quot;</code> and Escape-to-close</li>
          <li>Zero validator errors across the main pages when we were done locally</li>
        </ul>
        <p>
          I also set up <code>restic</code> backups and a sync workflow between <code>~/Websites</code> and <code>/srv/http</code>, because I have learned — painfully — that &quot;I&apos;ll remember where everything is&quot; is not a backup strategy.
        </p>
      </section>

      <section>
        <h3>FileZilla: My Other Arch Nemesis</h3>
        <div class="blog-image-one-off blog-photo" role="img" aria-label="Hands typing on a laptop during a file upload workflow" title="Photo: Unsplash (free to use)" style="background-image: url('/images/blog/ftp-upload.jpg')"></div>
        <p>
          Feeling confident, I opened FileZilla to upload the fixed files to my live host. Everything went great until I realized I had accidentally moved the <strong>entire site</strong> into the <code>contact/</code> folder. Not <em>a</em> contact page. Not <em>the</em> contact form. The whole dang website, nested like a matryoshka doll that nobody asked for.
        </p>
        <p>
          Locally, <code>/srv/http/</code> was empty except for a <code>contact/</code> directory containing... well, everything. <code>index.php</code>, <code>blog/</code>, <code>css/</code>, the works. It was like putting your entire house inside the mailbox and wondering why mail stopped arriving.
        </p>
        <p>
          A quick restore from <code>~/Websites</code>, an FTP deploy script, and we were back in business. Moral of the story: left pane is local, right pane is remote, and the FTP root is <code>/</code> — not <code>/contact/</code>. Write that on a sticky note. Tattoo it on your arm. Whatever it takes.
        </p>
      </section>

      <section>
        <h3>The PHP 7.4 Plot Twist</h3>
        <div class="blog-image-one-off blog-photo" role="img" aria-label="Close-up of PHP source code on a screen" title="Photo: Unsplash (free to use)" style="background-image: url('/images/blog/php-code.jpg')"></div>
        <p>
          Localhost worked beautifully. The contact slideout slid. The form appeared. Life was good. Then I checked the live site and — button only. No overlay. No form. Just a button staring back at me like a prop on a movie set with no wall behind it.
        </p>
        <p>
          The culprit? I used <code>str_starts_with()</code> in <code>contact-modal.php</code> to skip the modal on the contact and services pages. That function exists in PHP 8+. My live host runs <strong>PHP 7.4</strong>. So the footer include fatally errored, the modal HTML never rendered, and the button had nothing to open.
        </p>
        <p>
          One line change — <code>strpos($requestUri, &apos;/contact&apos;) === 0</code> — and it worked everywhere. Local dev on PHP 8.5, production on PHP 7.4. Same files, different universe. I now respect the phrase &quot;works on my machine&quot; on a spiritual level.
        </p>
      </section>

      <section>
        <h3>What I&apos;m Taking Away From This</h3>
        <p>
          The PHP include pattern is staying. It&apos;s simple, maintainable, and very much in the spirit of hand-coded sites. But standards compliance is not a one-time chore — it&apos;s part of the craft. And deploying to a live server adds a whole other layer: PHP version differences, FTP paths, and the eternal question of &quot;wait, which folder am I in?&quot;
        </p>
        <p>
          Next time I&apos;ll test the live site immediately after upload, keep my working copy in <code>~/Websites</code> for FTP convenience, and maybe — <em>maybe</em> — double-check the remote directory before clicking upload. But where&apos;s the fun in that?
        </p>
        <p>
          <em>Now if you&apos;ll excuse me, I&apos;m going to go pet my dog and pretend I never saw a validator report with triple-digit errors. The site works. The modal slides. The backups run. That&apos;s a Tuesday well spent on Arch Linux.</em>
        </p>
        <p><small>Photos in this post are from <a href="https://unsplash.com" title="Unsplash">Unsplash</a> (free to use).</small></p>
      </section>
    </article>

    <article class="blog-post">
      <header>
        <h2>The "Joys" of Web Development on Arch Linux: Apache Edition</h2>
      </header>

      <section>
        <p>
          <strong>Ah, the thrill of web development on Arch Linux.</strong> It's like running a marathon in a maze, blindfolded, and occasionally being chased by a bear. And that bear is Apache Web Server.
        </p>
        <p>
          When I first installed Arch Linux, I knew I was signing up for a <em>bit</em> of a challenge. But hey, it’s Arch! It’s lightweight, fast, and endlessly customizable! That’s what I kept telling myself as I dove into the deep end of the Linux pool. Little did I know that getting a web development environment running on this thing would be like trying to teach a cat to swim.
        </p>
      </section>

      <section>
        <h3>Step 1: Installing Apache – Piece of Cake, Right?</h3>
        <p>
          Arch Linux: <code>You want to install Apache? No problem, just run <em>sudo pacman -S apache</em></code>.
        </p>
        <p>
          Me: "Wow, this is going so smoothly. I wonder why people say Arch is hard?"
        </p>
        <p>
          Five minutes later...
        </p>
        <p>
          Apache: <em>"Ah, you installed me? Good. Now spend the next two hours configuring me."</em>
        </p>
      </section>

      <section>
        <h3>Step 2: Configuring Apache – The Real Fun Begins</h3>
        <p>
          Now, if you thought the installation was easy, you're in for a treat! The real "joy" starts when you try to configure Apache. Oh, you want to change the default document root to your project folder? Of course, it's just a simple change in the <code>/etc/httpd/conf/httpd.conf</code> file. Except...
        </p>
        <ul>
          <li>You miss one semicolon, and Apache throws a tantrum.</li>
          <li>You change one directory path, and suddenly it refuses to start.</li>
          <li>You forget to enable the service at boot, and it plays hide-and-seek after every restart.</li>
        </ul>
        <p>
          It’s like a highly temperamental artist – "You don’t <em>understand</em> my vision!" – while you just want to serve some HTML.
        </p>
      </section>

      <section>
        <h3>Step 3: Permissions – Welcome to Your New Nightmare</h3>
        <p>
          Ah, permissions. If there’s one thing I’ve learned, it’s that Arch Linux and Apache are both very <em>particular</em> about who’s allowed to do what. After setting up my development environment, I quickly realized that getting permissions right is more confusing than trying to explain recursion to a toddler.
        </p>
        <p>
          "Why can’t Apache read my files?"
        </p>
        <p>
          "Oh, because they’re in a folder owned by root? Sure, let me just—oh, wait, now <strong>nobody</strong> can read them."
        </p>
        <p>
          At this point, I've chanted <code>sudo chown</code> so many times that I feel like I'm summoning some kind of permissions demon. And then there's <code>chmod</code>, which I'm pretty sure is short for "Choose How Much Of Despair."
        </p>
      </section>

      <section>
        <h3>Step 4: The Firewall – Apache's Bouncer</h3>
        <p>
          Let’s not forget the firewall. Arch Linux is very protective. You’ll try to load your site in the browser, only to be greeted by a <em>very</em> polite error message: <em>"This site can't be reached."</em>
        </p>
        <p>
          Apache is running, I’ve configured it, I’ve set up my virtual hosts – but the firewall is like, "Nope, not on my watch!" It’s like Apache is the VIP guest, but the firewall forgot to check the list. So, after a good hour of opening ports, reloading services, and running <code>ufw allow 80/tcp</code>, I finally get it working.
        </p>
        <p>
          Only to realize I blocked all my other services. <em>Good job, me.</em>
        </p>
      </section>

      <section>
        <h3>Step 5: Virtual Hosts – Let’s Make This Interesting</h3>
        <p>
          By the time I got to virtual hosts, I thought I was a pro. "How hard can it be?"
        </p>
      </section>
    </article>
    <!-- Other blog posts follow here... -->
  </article>
</main>
