# Bring Your Moodle Classroom to Life

Bring a powerful, open-source virtual classroom directly into your Moodle courses. The plugNmeet plugin adds a fully-featured video conferencing activity, allowing you to host live online classes, webinars, and meetings **without ever leaving your Moodle site**. Best of all, the classroom interface is fully customizable to match your school's branding.

Your classroom is loaded directly within Moodle for a seamless, native experience—no redirects to third-party websites.

### How It Works

This plugin requires a running plugNmeet server. As a free and open-source project, you have two great options:

1.  **Self-Host:** Create your own server for maximum control by following the [official installation instructions](https://www.plugnmeet.org/docs/installation).
2.  **Use the Cloud:** Get started in minutes with a ready-to-use [plugNmeet cloud subscription](https://www.plugnmeet.cloud).

**Note:** The plugin includes pre-configured demo credentials to help you test its features immediately. This demo server is a shared resource and is **not intended for production use** as it can be unreliable. For any important meetings, we strongly recommend using one of the options above to ensure a stable and professional experience for you and your users.

---
## Installation & Configuration

Please follow this article: https://www.plugnmeet.org/docs/user-guide/moodle-integration

---
## Features

### Room Creation & Management
*   **Course-Integrated Rooms:** Add a web conferencing session by simply adding a 'plugNmeet' activity to your course.
*   **Customizable welcome message:** Greet participants with a custom message when they join.
*   **Set participant limits:** Control the maximum number of users in a session.
*   **Scheduling & Calendar Integration:** Set "Available from" and "Available until" dates for your rooms. When you set an "Available from" date, a new event is automatically added to the Moodle calendar, making it easy for students and teachers to see upcoming sessions.
*   **Guest access:** Allow external users to join sessions with a secure, shareable link.
*   **Moderator control:** Require a moderator to join before the session can start.

### In-Room Features
*   **Audio & Video:** High-quality, real-time audio and video communication.
*   **Screen Sharing:** Share your entire screen, an application window, or a browser tab.
*   **Interactive Whiteboard:** Collaborate with students using the built-in whiteboard.
*   **Shared Notepad:** Work on documents together in real-time.
*   **Chat:** Public and private chat with file upload capabilities.
*   **Polls:** Engage your audience and gather feedback with live polls.
*   **Breakout Rooms:** Split participants into smaller groups for focused discussions.
*   **Virtual Backgrounds:** Allow users to customize their video background.
*   **External Media Player:** Play external media, such as YouTube videos, for all participants.
*   **Waiting Room:** Control who enters the session with a waiting room.

### AI-Powered Insights & Features
_*Note: These features depend on the AI services being enabled and configured on your plugNmeet server._
*   **Live Transcription:** Get real-time, speaker-identified transcriptions of your sessions.
*   **Transcription Translation:** Allow participants to translate live transcriptions into their preferred language.
*   **Speech Synthesis:** Have transcriptions read aloud during the session.
*   **Live Chat Translation:** Enable real-time translation of chat messages.
*   **AI-Assisted Chat:** Interact with an AI assistant directly in the chat for queries and support.
*   **AI Meeting Summarization:** Automatically generate and download summaries of your meetings.

### Recording & Broadcasting
_*Note: Cloud recording and live broadcasting capabilities must be enabled on your plugNmeet server._
*   **Cloud Recording & Management:** Record sessions to the cloud. After the session, teachers can easily manage these recordings from the activity page—choose to make them visible to students, download them for offline use, or keep them hidden.
*   **Live Broadcasting (RTMP):** Stream your sessions live to a wider audience via platforms like YouTube or Facebook.
*   **Local Recording:** Allow moderators (teachers) to record the session and save the file directly to their own computer.
*   **Auto-Start Recording:** Automatically begin a cloud recording as soon as the session starts.

### Security & Privacy
*   **End-to-End Encryption (E2EE):** Secure your sessions with end-to-end encryption. [Learn more](https://www.plugnmeet.org/docs/security-overview#3-end-to-end-encryption-e2ee).
*   **Default Lock Settings:** Configure default lock settings for microphone, webcam, screen sharing, and more.
*   **Role-based permissions:** Control who can view and manage sessions, recordings, and reports.

### Analytics, Reports & Moodle Integration
*   **Cumulative Attendance Reporting:** Go beyond single-session reports. The plugin provides a consolidated attendance view for each Moodle activity, summarizing a student's total participation (time attended, etc.) across all sessions held within that activity.
*   **Student Self-Attendance View:** By default, students can view their own detailed attendance report for each `plugNmeet` activity. This personal dashboard shows their status (completed, present, or absent), total time attended, and a checklist of their participation, such as whether they raised their hand, sent a chat message, or enabled their webcam. This empowers students to track their own engagement without needing to ask the teacher.
*   **Advanced Completion Tracking:** Leverage Moodle's activity completion system like never before. The plugin adds custom rules that track cumulative user engagement across all sessions in an activity. Mark activities complete based on:
    *   Total minutes attended
    *   Raised hand at least once
    *   Sent at least one chat message
    *   Enabled webcam at least once
    *   Total webcam duration (in minutes)
    *   Enabled microphone at least once
    *   Total microphone duration (in minutes)
    *   Total talk duration (in minutes)
    *   Voted in a poll
    *   Annotated on the whiteboard
*   **Artifact Management in Moodle:** Access and manage session-generated files directly from the Moodle activity page. This includes AI-generated summaries, transcription files, token usage, cost and detailed per-session analytics reports, all governed by Moodle's roles and permissions.

### Branding & Technical Administration
*   **100% White-Label Experience:** Use the **Remote (Embedded)** client loading method to deliver a seamless, native experience. The classroom loads directly within your Moodle layout—no redirects, no third-party branding. To your users, it feels like just another page in your Moodle site. The alternative is the **Redirect** method, which sends users to the default plugNmeet interface, navigating them away from your site where custom branding may not apply.
*   **Deep Branding & Customization:** When using the local client, you have full control over the classroom's appearance. Customize it with your own logo, colors, background image, and even a custom CSS file to perfectly match your school's branding.
*   **Global Settings:** Configure default settings for all rooms from the Moodle admin panel.
*   **Role-Based Permissions:** Granular control over who can manage sessions, view recordings, and access reports.
*   **Webhook & Events API:** The plugin uses webhooks to receive real-time events from the plugnmeet server (like room creation, participant joins, new recordings, etc.). These are then immediately re-broadcast as standard Moodle events. This allows other Moodle plugins and custom scripts to easily hook into plugnmeet's events for further customization and integration.

## Translation
Please help us to translate moodle-mod_plugnmeet into your language. We're using [crowdin](https://crowdin.com/project/moodle-modplugnmeet) to translate the interface. You can translate directly there. If you don't find your language then please open an issue & we'll add your language ASAP.
