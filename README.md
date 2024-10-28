# Keylogger Collection
This repository contains two versions of a keylogger developed for educational and penetration testing purposes. The keyloggers are designed to capture keystrokes and log activity on different operating systems. Please note that these are the first versions and will be refined and enhanced over time.
<h2>Disclaimer</h2>
These tools are intended for educational and ethical penetration testing only. Unauthorized use of these tools to monitor systems without permission is illegal and unethical.
<h2>Keylogger Versions</h2>
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
      <li><b>Installation:</b>
        <ol>
          <li>Clone the file:
            <pre><code>git clone https://github.com/Kode-n-Rolla/keylogger.py/blob/main/keylogger_test_lin.py</code></pre>
          <li>Run the keylogger with root permissions:
            <pre><code>sudo python linux_keylogger.py</code></pre>
        </ol>
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
              <li><b>Installation:</b>
        <ol>
          <li>Clone the file:
            <pre><code>git clone https://github.com/Kode-n-Rolla/keylogger.py/blob/main/keylogger_test_win.py</code></pre>
          <li>Run the keylogger:
            <pre><code>python windows_keylogger.py</code></pre>
        </ol>
      </ul>
</ol>
<h3>Future Improvements:</h3>
<ul>
  <li><b>Security Enhancements:</b> Aim to make the keyloggers more robust and add encryption to protect the captured logs
  <li><b>Additional Platforms:</b> Support for macOS and possible improvements to cross-platform functionality
  <li><b>Process Tracking:</b> Improvements in tracking processes and window changes in Linux, similar to the Windows version
  <li><b>Customization:</b> Providing more customizable settings, such as changing the log file location, log formatting, and more
</ul>
