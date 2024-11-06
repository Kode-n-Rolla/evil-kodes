<h1 align='center'>Keyloggers Collection</h1>
This repository contains keyloggers for educational and penetration testing purposes. The keyloggers are designed to capture keystrokes and log activity on different operating systems. Please note that these are the first versions and will be refined and enhanced over time. These keyloggers designed for educational and ethical purposes.
<h2 align='center'>Disclaimer</h2>
These tools are intended for educational and ethical penetration testing only. Unauthorized use of these tools to monitor systems without permission is illegal and unethical.
<h2 align='center'>Keylogger Versions</h2>
<li><b>Installation:</b>
<pre><code>git clone https://github.com/Kode-n-Rolla/keyloggers.git
cd keyloggers</code></pre>
<ol>
  <h3><li>Linux Keylogger</h3>
    <ul>
      <li><b>Description:</b> This keylogger is specifically designed for Linux environments. It listens to keyboard events through the /dev/input devices and logs keystrokes to a file. The keylogger can also detect active processes using xdotool if available
      <li><b>Features:</b>
        <ul>
          <li>Captures and logs keystrokes directly from input devices
          <li>Supports the mapping of key codes to human-readable characters
          <li>Writes logs to a file for easy review and analysis
          <li>Requires root privileges for access to input devices
        </ul>
      <li><b>Run</b> the keylogger with root permissions:
            <pre><code>sudo python linux_keylogger.py</code></pre>
    </ul>
    <h3><li>Windows Keylogger</h3>
      <ul>
        <li><b>Description:</b> The Windows version of the keylogger leverages the Windows API and <code>psutil</code> library to capture active window information, process details, and keystrokes. It logs all activities into a file for analysis
        <li><b>Features:</b>
          <ul>
            <li>Captures and logs keystrokes using the Windows API
            <li>Retrieves active window and process information for detailed logging
            <li>Supports keyboard layout detection for accurate log representation
            <li>Outputs logs to a file with detailed information about the active application and layout
          </ul>
              <li><b>Run</b> the keylogger:
                <pre><code>python windows_keylogger.py</code></pre>
      </ul>
      <h3><li>Java Script Keylogger</h3>
            <ul>
        <li><b>Description:</b> It logs keypress events, including standard characters, special function keys (e.g., Esc, Enter, Backspace), and modifier keys (Shift, Ctrl, Alt). The keylogger also captures key combinations to provide more comprehensive data. The                   project showcases JavaScript's event handling capabilities, which could be useful in understanding how keylogging works
        <li><b>Features:</b>
          <ul>
            <li>Logs Regular Keys: Captures standard keyboard characters, including letters, numbers, and symbols
            <li>Detects Modifier Keys: Recognizes Shift, Ctrl, Alt, and Meta (Windows/Command) keys and includes them in the log
            <li>Records Special Function Keys: Handles function keys (Esc, Backspace, Delete, Enter, Caps Lock, Tab, and arrow keys)
            <li>Key Combination Logging: Logs combinations like Ctrl + C, Shift + A, or Alt + Enter
            <li>Optional Server Communication: Allows sending logged key data to a server endpoint (e.g., for remote analysis)
          </ul>
              <li><b>How to use:</b>
                <ul><li>Place the JavaScript file containing the keylogger code into an HTML file, or link it via a &lt;script> tag</ul>
</ol>
<h2 align='center'>Future Improvements:</h2>
<ul>
  <li><b>Security Enhancements:</b> Aim to make the keyloggers more robust and add encryption to protect the captured logs
  <li><b>Additional Platforms:</b> Support for macOS and possible improvements to cross-platform functionality
  <li><b>Process Tracking:</b> Improvements in tracking processes and window changes in Linux, similar to the Windows version
  <li><b>Customization:</b> Providing more customizable settings, such as changing the log file location, log formatting, and more
</ul>
