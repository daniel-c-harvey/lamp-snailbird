<div class="post">
    <h2 class="aqua header">Snailbird Lab</h2>
    <p>
        Welcome to the Lab!  Below you'll find a catalogue of software tools I have made or am developing for electronic musicians.
    </p>
</div>
<div class="post">
    <h3 class="teal header">Quanta Blocks</h3>
    <p>
        Quanta Blocks is a more robust implementation of one of my JSFX plugins I prototyped inside of REAPER.  
        Once I had a functional processor I decided to try the JUCE framework as a way to implement the effect 
        in a more robust programming environment.  The project ended up being a great way for me to learn the 
        fundamentals of JUCE, as well as put my C++ axe to the grindstone.
    </p>
    <p>
        The effect is simply a gate-triggered envelope sequence, with adjustable envelope stage timing and curves, 
        and normal gain.  The gates are synced to the plugin host and the sync rate can be modified.  
        It may have been faster to put something together to do this with REAPER itself, and even quicker with 
        Snap Heap, but this was good practice.  You can check out the software on 
        <a href="https://github.com/daniel-c-harvey/QuantaBlocks">GitHub</a>.  
        The plugin is in development but nearly finished.  
        I'll update the website with the release build plugin when it is complete.
    </p>
</div>
<div class="post">
    <h3 class="teal header">Snailbird JSFX</h3>
    <p>
        I've started a repository of custom JSFX and ReaScripts I use for my live set.  
        The scripts will not likely be useful to anyone else outside of reference, 
        but the JS effects are more generally useful.  
    </p>
    <p>
        You can check out the <a href="https://github.com/daniel-c-harvey/SnailbirdJSFX">GitHub repository</a>, 
        or learn more about the available plugins <a href="lab.php?page=snailbirdjsfx">here</a> on Snailbird.
    </p>
</div>
<div class="post">
    <h3 class="teal header">Patch Notes</h3>
    <p>
        Patch Notes is a Digital Audio Workstation plugin designed to afford hardware synthesizer 
        players an easier experience managing patch settings between DAW sessions.  
        More than a system for remembering and issuing Program Change messages, Patch Notes aims
        to cater to analog or other non-MIDI enabled gear, allowing the musician quick access to 
        critical information related to setting up a patch.  Patch Notes is currently in 
        design and development, and you can track the progress on 
        <a href="https://github.com/daniel-c-harvey/PatchNotes">GitHub</a>.
    </p>
    <p>
        The idea for Patch Notes came after some time thinking of solutions for managing the
        programs and patching for an array of hardware synthesizers and MIDI instruments.  
        Inspired by <a href="https://youtu.be/eJIW7sruHEA?si=JN9O0D9n2jM4sjxH&t=466">Nick Batt's use of Yamaha Setlist</a> for iOS, 
        I thought of creating a similar solution to embedding patching notes into a DAW track for reference during a live session.
    </p>
</div>