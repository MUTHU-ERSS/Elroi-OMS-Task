<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management System - Technical Task</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            /* Color Palette */
            --primary: #4F46E5;
            --primary-hover: #4338CA;
            --secondary: #64748B;
            --bg-body: #F8FAFC;
            --bg-card: #FFFFFF;
            --text-main: #1E293B;
            --text-muted: #64748B;
            --border-color: #E2E8F0;
            --code-bg: #1E293B;
            --code-text: #E2E8F0;
            --accent-warning: #F59E0B;
            --accent-danger: #EF4444;
            --accent-success: #10B981;

            /* Spacing & Shadows */
            --radius-md: 8px;
            --radius-lg: 12px;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-body);
            color: var(--text-main);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        /* Layout Structure */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: var(--bg-card);
            border-bottom: 1px solid var(--border-color);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-weight: 700;
            font-size: 1.25rem;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .task-meta {
            display: flex;
            gap: 1rem;
            font-size: 0.875rem;
            color: var(--text-muted);
        }

        .badge {
            padding: 0.25rem 0.75rem;
            border-radius: 999px;
            font-weight: 500;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .badge-warning {
            background-color: #FEF3C7;
            color: #D97706;
        }

        /* Hero Section */
        .hero {
            padding: 4rem 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            letter-spacing: -0.02em;
        }

        .hero p {
            font-size: 1.125rem;
            color: var(--text-muted);
            max-width: 600px;
            margin: 0 auto 2rem auto;
        }

        .requirements-box {
            background: #EFF6FF;
            border: 1px solid #BFDBFE;
            color: #1E40AF;
            padding: 1rem;
            border-radius: var(--radius-md);
            display: inline-block;
            font-weight: 500;
        }

        /* Main Content Grid */
        .grid-layout {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
            margin-bottom: 4rem;
        }

        @media (max-width: 900px) {
            .grid-layout {
                grid-template-columns: 1fr;
            }
        }

        /* Section Styling */
        .section-header {
            margin-bottom: 1.5rem;
            border-bottom: 1px solid var(--border-color);
            padding-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .section-header h2 {
            font-size: 1.5rem;
            color: var(--text-main);
        }

        .section-header i {
            color: var(--primary);
        }

        /* Task Modules Cards */
        .card {
            background: var(--bg-card);
            border-radius: var(--radius-lg);
            padding: 1.5rem;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--border-color);
            margin-bottom: 1.5rem;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .card-title {
            font-size: 1.125rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .card-list {
            list-style: none;
            padding-left: 0;
        }

        .card-list li {
            position: relative;
            padding-left: 1.5rem;
            margin-bottom: 0.5rem;
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        .card-list li::before {
            content: "•";
            color: var(--primary);
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        .tech-tags {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            margin-top: 1rem;
        }

        .tag {
            background: var(--bg-body);
            border: 1px solid var(--border-color);
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            font-size: 0.75rem;
            font-family: 'JetBrains Mono', monospace;
            color: var(--secondary);
        }

        /* Setup Instructions (Timeline Style) */
        .setup-step {
            position: relative;
            padding-left: 2rem;
            margin-bottom: 2rem;
            border-left: 2px solid var(--border-color);
        }

        .setup-step:last-child {
            border-left: 2px solid transparent;
        }

        .step-number {
            position: absolute;
            left: -11px;
            /* - 2px border + half width */
            top: 0;
            width: 20px;
            height: 20px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            font-weight: bold;
        }

        .step-title {
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-size: 1rem;
        }

        /* Code Blocks */
        .code-block {
            background: var(--code-bg);
            color: var(--code-text);
            padding: 1rem;
            border-radius: var(--radius-md);
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.85rem;
            overflow-x: auto;
            position: relative;
            margin-top: 0.5rem;
        }

        .code-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.5rem;
            border-bottom: 1px solid #334155;
            padding-bottom: 0.5rem;
        }

        .lang-label {
            font-size: 0.7rem;
            text-transform: uppercase;
            color: #94A3B8;
            font-weight: 600;
        }

        .copy-btn {
            background: transparent;
            border: none;
            color: #94A3B8;
            cursor: pointer;
            font-size: 0.8rem;
            transition: color 0.2s;
        }

        .copy-btn:hover {
            color: white;
        }

        .command {
            color: #A5B4FC;
        }

        .comment {
            color: #64748B;
            font-style: italic;
        }

        .arg {
            color: #FCA5A5;
        }

        /* API Section */
        .api-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: var(--bg-card);
            padding: 1rem;
            border: 1px solid var(--border-color);
            border-radius: var(--radius-md);
            margin-bottom: 1rem;
        }

        .api-method {
            font-weight: 700;
            color: var(--accent-success);
            margin-right: 0.75rem;
            font-family: 'JetBrains Mono', monospace;
            min-width: 45px;
        }

        .api-path {
            font-family: 'JetBrains Mono', monospace;
            color: var(--text-main);
            flex-grow: 1;
        }

        .api-btn {
            background: var(--primary);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: var(--radius-md);
            font-size: 0.875rem;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .api-btn:hover {
            background: var(--primary-hover);
        }

        /* Footer */
        footer {
            background: var(--bg-card);
            border-top: 1px solid var(--border-color);
            padding: 2rem 0;
            text-align: center;
            color: var(--text-muted);
            font-size: 0.875rem;
            margin-top: 4rem;
        }

        /* Toast Notification */
        .toast {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: var(--text-main);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-md);
            transform: translateY(150%);
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: 1000;
        }

        .toast.show {
            transform: translateY(0);
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <div class="container header-content">
            <div class="logo">
                <i class="fa-solid fa-boxes-packing"></i>
                Elroi Software Solution
            </div>
            <div class="task-meta">
                <span class="badge badge-warning"><i class="fa-regular fa-clock"></i> 2h 30m</span>
                <span><i class="fa-brands fa-laravel"></i> Laravel 12</span>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container">

        <!-- Hero -->
        <section class="hero">
            <h1>Coding Round</h1>
            <p>A technical assessment focused on backend logic, database operations, and dynamic frontend interactions
                using jQuery or JS.</p>
            <div class="requirements-box">
                <i class="fa-solid fa-triangle-exclamation"></i> Important Note

                Do not use any AI tools while working on this task.

                This includes:

                VS Code AI extensions

                Browser AI features (AI Overview)

                ChatGPT or similar AI tools

                The task must be completed entirely by the candidate.
            </div>
        </section>

        <div class="grid-layout">

            <!-- Left Column: Task Details -->
            <div class="content-col">

                <!-- Section 1: Modules -->
                <section>
                    <div class="section-header">
                        <i class="fa-solid fa-layer-group"></i>
                        <h2>Task Modules</h2>
                    </div>

                    <div class="card">
                        <div class="card-title"><i class="fa-solid fa-cart-plus"></i> Orders Module (Create)</div>
                        <ul class="card-list">
                            <li><strong>Customer Dropdown:</strong> Select from available customers.</li>
                            <li><strong>Dynamic Rows:</strong> 'Add Product' button adds new line items.</li>
                            <li><strong>Line Item:</strong> Product Select, Quantity, Price (Auto-filled), Amount
                                (Calc).</li>
                            <li><strong>Actions:</strong> Delete button per row.</li>
                            <li><strong>jQuery Logic:</strong> Dynamic Grand Total calculation.</li>
                            <li><strong>Database:</strong> Save to <code>orders</code> and <code>order_items</code>.
                            </li>
                        </ul>
                        <div class="tech-tags">
                            <span class="tag">jQuery Events</span>
                            <span class="tag">DOM Manipulation</span>
                            <span class="tag">Transaction</span>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-title"><i class="fa-solid fa-clock-rotate-left"></i> Orders History</div>
                        <ul class="card-list">
                            <li>Display all orders in a table.</li>
                            <li>Columns: Order ID, Customer Name, Date, Product Details, Grand Total.</li>
                            <li><strong>Requirement:</strong> Use Query Builder with LEFT JOIN.</li>
                        </ul>
                        <div class="tech-tags">
                            <span class="tag">Joins</span>
                            <span class="tag">Aggregates</span>
                        </div>
                    </div>
                </section>

                <!-- Section 2: API Endpoints -->
                <section style="margin-top: 3rem;">
                    <div class="section-header">
                        <i class="fa-solid fa-plug"></i>
                        <h2>API Endpoints</h2>
                    </div>
                    <p style="margin-bottom: 1rem; color: var(--text-muted);">Use browser, Postman, or curl to test JSON
                        responses.</p>

                    <div class="api-item">
                        <div style="display:flex; align-items:center;">
                            <span class="api-method">GET</span>
                            <span class="api-path">/api/customers</span>
                        </div>
                        <a href="http://127.0.0.1:8000/api/customers" target="_blank" class="api-btn">
                            <i class="fa-solid fa-external-link-alt"></i> Open
                        </a>
                    </div>

                    <div class="api-item">
                        <div style="display:flex; align-items:center;">
                            <span class="api-method">GET</span>
                            <span class="api-path">/api/products</span>
                        </div>
                        <a href="http://127.0.0.1:8000/api/products" target="_blank" class="api-btn">
                            <i class="fa-solid fa-external-link-alt"></i> Open
                        </a>
                    </div>
                </section>
            </div>

            <!-- Right Column: Setup Guide -->
            <div class="sidebar-col">

                <div class="card" style="position: sticky; top: 100px;">
                    <div class="section-header" style="border:none; padding-bottom:0;">
                        <i class="fa-solid fa-terminal"></i>
                        <h2>Setup Guide</h2>
                    </div>

                    <div class="setup-step">
                        <div class="step-number">1</div>
                        <div class="step-title">Clone (if already cloned, ignore)</div>
                        <div class="code-block">
                            <button class="copy-btn" onclick="copyCode(this)"><i
                                    class="fa-regular fa-copy"></i></button>
                            <div><span class="command">git clone</span> https://github.com/MUTHU-ERSS/Elroi-OMS-Task.git
                            </div>
                            <div style="margin-top: 4px;"><span class="command">cd</span> Elroi-OMS-Task</div>
                        </div>
                    </div>

                    <div class="setup-step">
                        <div class="step-number">2</div>
                        <div class="step-title">Install Dependencies</div>
                        <div class="code-block">
                            <button class="copy-btn" onclick="copyCode(this)"><i
                                    class="fa-regular fa-copy"></i></button>
                            <div><span class="command">composer</span> install</div>
                        </div>
                    </div>

                    <div class="setup-step">
                        <div class="step-number">3</div>
                        <div class="step-title">Environment Setup</div>
                        <div class="code-block">
                            <button class="copy-btn" onclick="copyCode(this)"><i
                                    class="fa-regular fa-copy"></i></button>
                            <div><span class="comment"># .env file</span></div>
                            <div>DB_CONNECTION=<span class="arg">sqlite</span></div>
                            <div style="margin-top: 4px;"><span class="comment"># Create DB file</span></div>
                            <div><span class="command">touch</span> database/database.sqlite</div>
                        </div>
                    </div>

                    <div class="setup-step">
                        <div class="step-number">4</div>
                        <div class="step-title">Database & Keys</div>
                        <div class="code-block">
                            <button class="copy-btn" onclick="copyCode(this)"><i
                                    class="fa-regular fa-copy"></i></button>
                            <div><span class="command">php artisan</span> key:generate</div>
                            <div><span class="command">php artisan</span> migrate</div>
                            <div><span class="command">php artisan</span> db:seed</div>
                        </div>
                    </div>

                    <div class="setup-step" style="border-left: none;">
                        <div class="step-number">5</div>
                        <div class="step-title">Run Application</div>
                        <div class="code-block"
                            style="background: var(--accent-success); color: white; border: none;">
                            <button class="copy-btn" onclick="copyCode(this)" style="color: rgba(255,255,255,0.8)"><i
                                    class="fa-regular fa-copy"></i></button>
                            <div><span class="command">php artisan</span> serve</div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2023 Elroi-OMS-Task. Technical Assessment Project.</p>
            <p style="margin-top: 0.5rem; font-size: 0.75rem;">Requirements: PHP 8.2.12 | Laravel 12.46.0</p>
        </div>
    </footer>

    <!-- Toast Element -->
    <div id="toast" class="toast">Command copied to clipboard!</div>

    <!-- Script for Interactivity -->
    <script>
        function copyCode(button) {
            // Find the code container relative to the button
            const codeBlock = button.parentElement;
            // Extract text, ignoring the button text itself
            const textToCopy = Array.from(codeBlock.childNodes)
                .filter(node => node !== button && node.nodeType === Node.TEXT_NODE || (node.nodeType === Node
                    .ELEMENT_NODE && node.tagName !== 'BUTTON'))
                .map(node => node.textContent)
                .join('\n')
                .trim();

            navigator.clipboard.writeText(textToCopy).then(() => {
                showToast();
            }).catch(err => {
                console.error('Failed to copy text: ', err);
            });
        }

        function showToast() {
            const toast = document.getElementById('toast');
            toast.classList.add('show');
            setTimeout(() => {
                toast.classList.remove('show');
            }, 3000);
        }
    </script>
</body>

</html>
