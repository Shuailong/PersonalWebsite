ۋ@U<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":23:{s:2:"ID";s:3:"245";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-03-08 11:18:07";s:13:"post_date_gmt";s:19:"2015-03-08 03:18:07";s:12:"post_content";s:21225:"<h3 class="gh-header-title instapaper_title">Terminal Cheatsheet for Mac</h3>
<table border="0">
<tbody>
<tr>
<td>⌘</td>
<td>Command key</td>
</tr>
<tr>
<td>⌃</td>
<td>Control key</td>
</tr>
<tr>
<td>⌥</td>
<td>Option key</td>
</tr>
<tr>
<td>⇧</td>
<td>Shift Key</td>
</tr>
<tr>
<td>⇪</td>
<td>Caps Lock</td>
</tr>
<tr>
<td>fn</td>
<td>Function Key</td>
</tr>
</tbody>
</table>
<!--more-->
<table>
<tbody>
<tr>
<th>Key/Command</th>
<th>Description</th>
</tr>
<tr>
<td>Ctrl + A</td>
<td>Go to the beginning of the line you are currently typing on</td>
</tr>
<tr>
<td>Ctrl + E</td>
<td>Go to the end of the line you are currently typing on</td>
</tr>
<tr>
<td>Ctrl + L</td>
<td>Clears the Screen</td>
</tr>
<tr>
<td>Command + K</td>
<td>Clears the Screen</td>
</tr>
<tr>
<td>Ctrl + U</td>
<td>Clears the line before the cursor position. If you are at the end of the line, clears the entire line.</td>
</tr>
<tr>
<td>Ctrl + H</td>
<td>Same as backspace</td>
</tr>
<tr>
<td>Ctrl + R</td>
<td>Lets you search through previously used commands</td>
</tr>
<tr>
<td>Ctrl + C</td>
<td>Kill whatever you are running</td>
</tr>
<tr>
<td>Ctrl + D</td>
<td>Exit the current shell</td>
</tr>
<tr>
<td>Ctrl + Z</td>
<td>Puts whatever you are running into a suspended background process. fg restores it.</td>
</tr>
<tr>
<td>Ctrl + W</td>
<td>Delete the word before the cursor</td>
</tr>
<tr>
<td>Ctrl + K</td>
<td>Clear the line after the cursor</td>
</tr>
<tr>
<td>Ctrl + T</td>
<td>Swap the last two characters before the cursor</td>
</tr>
<tr>
<td>Esc + T</td>
<td>Swap the last two words before the cursor</td>
</tr>
<tr>
<td>Alt + F</td>
<td>Move cursor forward one word on the current line</td>
</tr>
<tr>
<td>Alt + B</td>
<td>Move cursor backward one word on the current line</td>
</tr>
<tr>
<td>Tab</td>
<td>Auto-complete files and folder names</td>
</tr>
</tbody>
</table>
<h4><a id="user-content-core-commands" class="anchor" href="https://github.com/0nn0/terminal-mac-cheatsheet/wiki/Terminal-Cheatsheet-for-Mac-(-basics-)#core-commands"></a>CORE COMMANDS</h4>
<table>
<tbody>
<tr>
<td>cd</td>
<td>Home directory</td>
</tr>
<tr>
<td>cd [folder]</td>
<td>Change directory</td>
</tr>
<tr>
<td>cd ~</td>
<td>Home directory, e.g. ‘cd ~/folder/’</td>
</tr>
<tr>
<td>cd /</td>
<td>Root of drive</td>
</tr>
<tr>
<td>ls</td>
<td>Short listing</td>
</tr>
<tr>
<td>ls -l</td>
<td>Long listing</td>
</tr>
<tr>
<td>ls -a</td>
<td>Listing incl. hidden files</td>
</tr>
<tr>
<td>ls -lh</td>
<td>Long listing with Human readable file sizes</td>
</tr>
<tr>
<td>ls -R</td>
<td>Entire content of folder recursively</td>
</tr>
<tr>
<td>sudo [command]</td>
<td>Run command with the security privileges of the superuser (Super User DO)</td>
</tr>
<tr>
<td>open [file]</td>
<td>Opens a file ( as if you double clicked it )</td>
</tr>
<tr>
<td>top</td>
<td>Displays active processes. Press q to quit</td>
</tr>
<tr>
<td>nano [file]</td>
<td>Opens the Terminal its editor</td>
</tr>
<tr>
<td>pico [file]</td>
<td>Opens the Terminal its editor</td>
</tr>
<tr>
<td>q</td>
<td>Exit</td>
</tr>
<tr>
<td>clear</td>
<td>Clear screen</td>
</tr>
</tbody>
</table>
<h3><a id="user-content-command-history" class="anchor" href="https://github.com/0nn0/terminal-mac-cheatsheet/wiki/Terminal-Cheatsheet-for-Mac-(-basics-)#command-history"></a>COMMAND HISTORY</h3>
<table>
<tbody>
<tr>
<td>history n</td>
<td>Shows the stuff typed – add a number to limit the last n items</td>
</tr>
<tr>
<td>ctrl-r</td>
<td>Interactively search through previously typed commands</td>
</tr>
<tr>
<td>![value]</td>
<td>Execute the last command typed that starts with ‘value’</td>
</tr>
<tr>
<td>!!</td>
<td>Execute the last command typed</td>
</tr>
</tbody>
</table>
<h4><a id="user-content-file-management" class="anchor" href="https://github.com/0nn0/terminal-mac-cheatsheet/wiki/Terminal-Cheatsheet-for-Mac-(-basics-)#file-management"></a>FILE MANAGEMENT</h4>
<table>
<tbody>
<tr>
<td>touch [file]</td>
<td>Create new file</td>
</tr>
<tr>
<td>pwd</td>
<td>Full path to working directory</td>
</tr>
<tr>
<td>..</td>
<td>Parent/enclosing directory, e.g.</td>
</tr>
<tr>
<td></td>
<td>‘ls -l ..’ = Long listing of parent directory</td>
</tr>
<tr>
<td></td>
<td>‘cd ../../’ = Move 2 levels up</td>
</tr>
<tr>
<td>.</td>
<td>Current folder</td>
</tr>
<tr>
<td>cat</td>
<td>Concatenate to screen</td>
</tr>
<tr>
<td>rm [file]</td>
<td>Remove a file, e.g. rm [file] [file]</td>
</tr>
<tr>
<td>rm -i [file]</td>
<td>Remove with confirmation</td>
</tr>
<tr>
<td>rm -r [dir]</td>
<td>Remove a directory and contents</td>
</tr>
<tr>
<td>rm -f [file]</td>
<td>Force removal without confirmation</td>
</tr>
<tr>
<td>rm -i [file]</td>
<td>Will display prompt before</td>
</tr>
<tr>
<td>cp [file] [newfile]</td>
<td>Copy file to file</td>
</tr>
<tr>
<td>cp [file] [dir]</td>
<td>Copy file to directory</td>
</tr>
<tr>
<td>mv [file] [new filename]</td>
<td>Move/Rename, e.g. mv -v [file] [dir]</td>
</tr>
</tbody>
</table>
<h4><a id="user-content-directory-management" class="anchor" href="https://github.com/0nn0/terminal-mac-cheatsheet/wiki/Terminal-Cheatsheet-for-Mac-(-basics-)#directory-management"></a>DIRECTORY MANAGEMENT</h4>
<table>
<tbody>
<tr>
<td>mkdir [dir]</td>
<td>Create new directory</td>
</tr>
<tr>
<td>mkdir -p [dir]/[dir]</td>
<td>Create nested directories</td>
</tr>
<tr>
<td>rmdir [dir]</td>
<td>Remove directory ( only operates on empty directories )</td>
</tr>
<tr>
<td>rm -R [dir]</td>
<td>Remove directory and contents</td>
</tr>
</tbody>
</table>
<h4><a id="user-content-pipes--allows-to-combine-multiple-commands-that-generate-output" class="anchor" href="https://github.com/0nn0/terminal-mac-cheatsheet/wiki/Terminal-Cheatsheet-for-Mac-(-basics-)#pipes--allows-to-combine-multiple-commands-that-generate-output"></a>PIPES – Allows to combine multiple commands that generate output</h4>
<table>
<tbody>
<tr>
<td>more</td>
<td>Output content delivered in screensize chunks</td>
</tr>
<tr>
<td>&gt; [file]</td>
<td>Push output to file, keep in mind it will get overwritten</td>
</tr>
<tr>
<td>&gt;&gt; [file]</td>
<td>Append output to existing file</td>
</tr>
<tr>
<td>&lt;</td>
<td>Tell command to read content from a fi</td>
</tr>
</tbody>
</table>
<h4><a id="user-content-help" class="anchor" href="https://github.com/0nn0/terminal-mac-cheatsheet/wiki/Terminal-Cheatsheet-for-Mac-(-basics-)#help"></a>HELP</h4>
<table>
<tbody>
<tr>
<td>[command] -h</td>
<td>Offers help</td>
</tr>
<tr>
<td>[command] —help</td>
<td>Offers help</td>
</tr>
<tr>
<td>[command] help</td>
<td>Offers help</td>
</tr>
<tr>
<td>reset</td>
<td>Resets the terminal display</td>
</tr>
<tr>
<td>man [command]</td>
<td>Show the help for ‘command’</td>
</tr>
<tr>
<td>whatis [command]</td>
<td>Gives a one-line description of ‘command’</td>
</tr>
</tbody>
</table>
<h4>Taking screenshots</h4>
<table border="0">
<tbody>
<tr>
<td>Key combination</td>
<td>What it does</td>
</tr>
<tr>
<td>Command-Shift-3</td>
<td>Capture the screen to a file</td>
</tr>
<tr>
<td>Command-Shift-Control-3</td>
<td>Capture the screen to the Clipboard</td>
</tr>
<tr>
<td>Command-Shift-4</td>
<td>Capture a selection of the screen to a file, or press the spacebar to capture just a window</td>
</tr>
<tr>
<td>Command-Shift-Control-4</td>
<td>Capture a selection of the screen to the Clipboard, or press the spacebar to capture just a window</td>
</tr>
</tbody>
</table>
<h4>Startup shortcuts</h4>
<table border="0">
<tbody>
<tr>
<td>Key or key combination</td>
<td>What it does</td>
</tr>
<tr>
<td>Option or Alt</td>
<td>Display all startup volumes (<a href="http://support.apple.com/kb/HT1310">Startup Manager</a>)</td>
</tr>
<tr>
<td>Shift</td>
<td>Start up in <a href="http://support.apple.com/kb/HT1455">Safe Mode</a></td>
</tr>
<tr>
<td>C</td>
<td>Start from bootable media (DVD, CD, USB thumb drive)</td>
</tr>
<tr>
<td>T</td>
<td>Start up in <a href="http://support.apple.com/kb/PH19021">Target disk mode</a></td>
</tr>
<tr>
<td>N</td>
<td>Start from a NetBoot server</td>
</tr>
<tr>
<td>X</td>
<td>Force OS X startup (when non-OS X startup volumes are available)</td>
</tr>
<tr>
<td>D</td>
<td>Use Apple Hardware Test</td>
</tr>
<tr>
<td>Command-R</td>
<td>Use <a href="http://support.apple.com/kb/HT4718">OS X Recovery</a> (OS X Lion or later)</td>
</tr>
<tr>
<td>Command-Option-R</td>
<td>Use <a href="http://support.apple.com/kb/HT4718">Internet Recovery</a> on supported computers</td>
</tr>
<tr>
<td>Command-V</td>
<td>Start up in <a href="http://support.apple.com/kb/HT1492">Verbose Mode</a></td>
</tr>
<tr>
<td>Command-S</td>
<td>Start up in <a href="http://support.apple.com/kb/HT1492">Single User Mode</a></td>
</tr>
<tr>
<td>Command-Option-P-R</td>
<td><a href="http://support.apple.com/kb/PH18761">Reset</a> NVRAM</td>
</tr>
<tr>
<td>Hold down the Media Eject (⏏) key, F12 key, or mouse or trackpad button</td>
<td>Eject removable discs</td>
</tr>
</tbody>
</table>
<h4>Sleep, shut down, and log out shortcuts</h4>
<table border="0">
<tbody>
<tr>
<td>Key or key combination</td>
<td>What it does</td>
</tr>
<tr>
<td>Power button</td>
<td>Tap to power on. Once powered on, tap the power button to wake or sleep your Mac.</td>
</tr>
<tr>
<td>Hold down the power button for 1.5 seconds</td>
<td>Show the restart / sleep / shut down dialog</td>
</tr>
<tr>
<td>Hold down the power button for 5 seconds</td>
<td>Force the Mac to power off</td>
</tr>
<tr>
<td>Control-Power button</td>
<td>Show the restart / sleep / shut down dialog</td>
</tr>
<tr>
<td>Command-Control-power button</td>
<td>Force the Mac to restart</td>
</tr>
<tr>
<td>Command-Option-Power button</td>
<td>Put the computer to sleep</td>
</tr>
<tr>
<td>Command-Control-Power button</td>
<td>Quit all apps (after giving you a chance to save changes to open documents), then restart the computer</td>
</tr>
<tr>
<td>Command-Option-Control-Power button</td>
<td>Quit all apps (after giving you a chance to save changes to open documents), then shut down the computer</td>
</tr>
<tr>
<td>Shift-Control-Power button</td>
<td>Put all displays to sleep</td>
</tr>
<tr>
<td>Command-Shift-Q</td>
<td>Log Out</td>
</tr>
<tr>
<td>Command-Shift-Option-Q</td>
<td>Log Out immediately</td>
</tr>
</tbody>
</table>
<h4>App shortcuts</h4>
<table border="0">
<tbody>
<tr>
<td>Key combination</td>
<td>What it does</td>
</tr>
<tr>
<td>Command-A</td>
<td>Select all items or text in the frontmost window</td>
</tr>
<tr>
<td>Command-Z</td>
<td>Undo the previous command (some apps allow you to undo multiple times)</td>
</tr>
<tr>
<td>Command-Shift-Z</td>
<td>Redo, puts back the last change made with undo (some apps allow you to redo multiple times)</td>
</tr>
<tr>
<td>Command-Space bar</td>
<td>Show or hide the Spotlight search field
(if multiple languages are being used simultaneously, this shortcut may rotate through enabled script systems instead)</td>
</tr>
<tr>
<td>Command-Option-Space bar</td>
<td>Show the Spotlight search results window (if multiple languages are installed, may rotate through keyboard layouts and input methods within a script)</td>
</tr>
<tr>
<td>Command-Tab</td>
<td>Move forward to the next most recently used app in a list of open apps</td>
</tr>
<tr>
<td>Option-Media Eject (⏏)</td>
<td>Eject from secondary optical media drive (if one is installed)</td>
</tr>
<tr>
<td>Command-Brightness down (F1)</td>
<td>Toggle "Mirror Displays" on multi-monitor configurations</td>
</tr>
<tr>
<td>Command-Brightness up (F2)</td>
<td>Toggle <a href="http://support.apple.com/kb/PH19038">Target Display Mode</a></td>
</tr>
<tr>
<td>Command-Mission Control  (F3)</td>
<td>Show Desktop</td>
</tr>
<tr>
<td>Command-F5</td>
<td>Toggle VoiceOver On or Off</td>
</tr>
<tr>
<td>Option-Brightness (F2)</td>
<td>Opens "Displays" System Preference</td>
</tr>
<tr>
<td>Option-Mission Control (F3)</td>
<td>Open Mission Control preferences</td>
</tr>
<tr>
<td>Option-Volume key (F12)</td>
<td>Open Sound preferences</td>
</tr>
<tr>
<td>Command-Minus (–)</td>
<td>Decrease the size of the selected item</td>
</tr>
<tr>
<td>Command-Colon (:)</td>
<td>Display the Spelling and Grammar window</td>
</tr>
<tr>
<td>Command-Semicolon (;)</td>
<td>Find misspelled words in the document</td>
</tr>
<tr>
<td>Command-Comma (,)</td>
<td>Open the front app's preferences window</td>
</tr>
<tr>
<td>Command-Question Mark (?)</td>
<td>Open the Help menu</td>
</tr>
<tr>
<td>Command-plus (+)
or Command-Shift-Equals (=)</td>
<td>Increase the size of the selected item</td>
</tr>
<tr>
<td>Command-Option-D</td>
<td>Show or hide the Dock</td>
</tr>
<tr>
<td>Command-Control-D</td>
<td>Show or hide the definition of a selected word</td>
</tr>
<tr>
<td>Command-D</td>
<td>Selects the Desktop folder in Open and Save dialogs</td>
</tr>
<tr>
<td>Command-Delete</td>
<td>Selects Don't Save in dialogs that contain a Delete or Don't Save button</td>
</tr>
<tr>
<td>Command-E</td>
<td>Use the selection for a find</td>
</tr>
<tr>
<td>Command-F</td>
<td>Open a Find window or find text in a document</td>
</tr>
<tr>
<td>Command-Option-F</td>
<td>Move to the search field control</td>
</tr>
<tr>
<td>Command-G</td>
<td>Find the next occurrence of the selection</td>
</tr>
<tr>
<td>Command-Shift-G</td>
<td>Find the previous occurrence of the selection</td>
</tr>
<tr>
<td>Command-H</td>
<td>Hide the windows of the currently running app</td>
</tr>
<tr>
<td>Command-Option-H</td>
<td>Hide the windows of all other running apps</td>
</tr>
<tr>
<td>Command-Option-I</td>
<td>Display an inspector window</td>
</tr>
<tr>
<td>Command-M</td>
<td>Minimize the active window to the Dock</td>
</tr>
<tr>
<td>Command-Option-M</td>
<td>Minimize all windows of the active app to the Dock</td>
</tr>
<tr>
<td>Command-N</td>
<td>Create a new document in the frontmost app</td>
</tr>
<tr>
<td>Command-O</td>
<td>Display a dialog for choosing a document to open in the frontmost app</td>
</tr>
<tr>
<td>Command-P</td>
<td>Print the current document</td>
</tr>
<tr>
<td>Command-Shift-P</td>
<td>Display a window for specifying document parameters (Page Setup)</td>
</tr>
<tr>
<td>Command-Q</td>
<td>Quit the frontmost app</td>
</tr>
<tr>
<td>Command-S</td>
<td>Save the active document</td>
</tr>
<tr>
<td>Command-Shift-S</td>
<td>Display the Save As dialog or duplicate the current document</td>
</tr>
<tr>
<td>Command-Option-T</td>
<td>Show or hide a toolbar</td>
</tr>
<tr>
<td>Command-W</td>
<td>Close the frontmost window</td>
</tr>
<tr>
<td>Command-Option-W</td>
<td>Close all windows in the current app</td>
</tr>
<tr>
<td>Command-Z</td>
<td>Undo previous command (some apps allow for multiple Undos)</td>
</tr>
<tr>
<td>Command-Shift-Z</td>
<td>Redo, puts back last change made using undo (some apps allow for multiple Redos)</td>
</tr>
<tr>
<td>Command-Option-esc</td>
<td>choose an app to <a href="http://support.apple.com/kb/HT3411">Force Quit</a></td>
</tr>
<tr>
<td>Command-Shift-Option-Esc (hold for three seconds)</td>
<td><a href="http://support.apple.com/kb/HT3411">Force Quit</a> the front-most app</td>
</tr>
</tbody>
</table>
<h4>Working with Text</h4>
<table border="0">
<tbody>
<tr>
<td>Key combination</td>
<td>What it does</td>
</tr>
<tr>
<td>Command-B</td>
<td>Bold the selected text or toggle bold text on or off</td>
</tr>
<tr>
<td>Command-I</td>
<td>Italicize the selected text or toggle italic text on or off</td>
</tr>
<tr>
<td>Command-U</td>
<td>Underline the selected text or toggle underline on or off</td>
</tr>
<tr>
<td>Command-T</td>
<td>Show or hide the Fonts window</td>
</tr>
<tr>
<td>fn-Delete</td>
<td>Forward Delete (on a portable Mac's built-in keyboard)</td>
</tr>
<tr>
<td>fn-Up Arrow</td>
<td>Scroll up one page (same as Page Up key)</td>
</tr>
<tr>
<td>fn-Down Arrow</td>
<td>Scroll down one page (same as Page Down key)</td>
</tr>
<tr>
<td>fn-Left Arrow</td>
<td>Scroll to the beginning of a document (same as Home key)</td>
</tr>
<tr>
<td>fn-Right Arrow</td>
<td>Scroll to the end of a document (same as End key)</td>
</tr>
<tr>
<td>Command-Right Arrow</td>
<td>Move the text insertion point to the end of the current line</td>
</tr>
<tr>
<td>Command-Left Arrow</td>
<td>Move the text insertion point to the beginning of the current line</td>
</tr>
<tr>
<td>Command-Down Arrow</td>
<td>Move the text insertion point to the end of the document</td>
</tr>
<tr>
<td>Command-Up Arrow</td>
<td>Move the text insertion point to the beginning of the document</td>
</tr>
<tr>
<td>Option-Right Arrow</td>
<td>Move the text insertion point to the end of the next word</td>
</tr>
<tr>
<td>Option-Left Arrow</td>
<td>Move the text insertion point to the beginning of the previous word</td>
</tr>
<tr>
<td>Option-Delete</td>
<td>Delete the word that is left of the cursor, as well as any spaces or punctuation after the word</td>
</tr>
<tr>
<td>Command-Shift-Right Arrow</td>
<td>Select text between the insertion point and the end of the current line (*)</td>
</tr>
<tr>
<td>Command-Shift-Left Arrow</td>
<td>Select text between the insertion point and the beginning of the current line (*)</td>
</tr>
<tr>
<td>Command-Shift-Up Arrow</td>
<td>Select text between the insertion point and the beginning of the document (*)</td>
</tr>
<tr>
<td>Command-Shift-Down Arrow</td>
<td>Select text between the insertion point and the end of the document (*)</td>
</tr>
<tr>
<td>Shift-Left Arrow</td>
<td>Extend text selection one character to the left (*)</td>
</tr>
<tr>
<td>Shift-Right Arrow</td>
<td>Extend text selection one character to the right (*)</td>
</tr>
<tr>
<td>Shift-Up Arrow</td>
<td>Extend text selection to the line above, to the nearest character boundary at the same horizontal location (*)</td>
</tr>
<tr>
<td>Shift-Down Arrow</td>
<td>Extend text selection to the line below, to the nearest character boundary at the same horizontal location (*)</td>
</tr>
<tr>
<td>Shift-Option-Right Arrow</td>
<td>Extend text selection to the end of the current word, then to the end of the following word if pressed again (*)</td>
</tr>
<tr>
<td>Shift-Option-Left Arrow</td>
<td>Extend text selection to the beginning of the current word, then to the beginning of the following word if pressed again (*)</td>
</tr>
<tr>
<td>Shift-Option-Down Arrow</td>
<td>Extend text selection to the end of the current paragraph, then to the end of the following paragraph if pressed again (*)</td>
</tr>
<tr>
<td>Shift-Option-Up Arrow</td>
<td>Extend text selection to the beginning of the current paragraph, then to the beginning of the following paragraph if pressed again (*)</td>
</tr>
<tr>
<td>Control-A</td>
<td>Move to beginning of line or paragraph</td>
</tr>
<tr>
<td>Control-B</td>
<td>Move one character backward</td>
</tr>
<tr>
<td>Control-D</td>
<td>Delete the character in front of the cursor</td>
</tr>
<tr>
<td>Control-E</td>
<td>Move to the end of a line or paragraph</td>
</tr>
<tr>
<td>Control-F</td>
<td>Move one character forward</td>
</tr>
<tr>
<td>Control-H</td>
<td>Delete the character behind the cursor</td>
</tr>
<tr>
<td>Control-K</td>
<td>Delete from the character in front of the cursor to the end of the line or paragraph</td>
</tr>
<tr>
<td>Control-L</td>
<td>Center the cursor or selection in the visible area</td>
</tr>
<tr>
<td>Control-N</td>
<td>Move down one line</td>
</tr>
<tr>
<td>Control-O</td>
<td>Insert a new line after the cursor</td>
</tr>
<tr>
<td>Control-P</td>
<td>Move up one line</td>
</tr>
<tr>
<td>Control-T</td>
<td>Transpose the character behind the cursor and the character in front of the cursor</td>
</tr>
<tr>
<td>Control-V</td>
<td>Move down</td>
</tr>
<tr>
<td>Command-{</td>
<td>Left-align a selection</td>
</tr>
<tr>
<td>Command-}</td>
<td>Right-align a selection</td>
</tr>
<tr>
<td>Command-|</td>
<td>Center-align a selection</td>
</tr>
<tr>
<td>Command-Option-C</td>
<td>Copy the formatting settings of the selected item and store on the Clipboard</td>
</tr>
<tr>
<td>Command-Option-V</td>
<td>Apply the style of one object to the selected object (Paste Style)</td>
</tr>
<tr>
<td>Command-Shift-Option-V</td>
<td>Apply the style of the surrounding text to the inserted object (Paste and Match Style)</td>
</tr>
<tr>
<td>Command-Control-V</td>
<td>Apply formatting settings to the selected object (Paste Ruler)</td>
</tr>
</tbody>
</table>
Source: <a href="https://support.apple.com/en-us/HT201236">Apple.com</a>, <a href="https://github.com/0nn0/terminal-mac-cheatsheet">0nn0</a>";s:10:"post_title";s:13:"Mac shortcuts";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:13:"mac-shortcuts";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-03-08 11:19:42";s:17:"post_modified_gmt";s:19:"2015-03-08 03:19:42";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:31:"http://shuailong.me/blog/?p=245";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}