<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HGK Memo</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom Styles */
    .sidebar {
      min-height: 100vh;
    }
  </style>
</head>
<body class="bg-gray-100">

  <div class="flex h-auto min-h-screen">
    <!-- Sidebar -->
    <div class="w-52 bg-blue-900 text-white p-1 flex flex-col sidebar">
      <div class="flex h-16 items-center">
        <a href="{{ route('livewire.home') }}">
            <h2 class="text-xl font-semibold">HGK MEMO</h2>
        </a>
      </div>
      <nav class="flex-1 flex flex-col">
        <ul role="list" class="flex flex-1 flex-col gap-y-4">
        <li>
        <div>
            <a href={{ route('livewire.auditor-dashboard.auditor-dashboard') }}
            class="flex w-full items-center gap-x-3 rounded-md p-2 text-left text-sm font-semibold text-white hover:bg-gray-900">
            Auditor Dashboard
            </a>
        </div>
        </li>
          <li>
            <div>
              <button type="button" class="flex w-full items-center gap-x-3 rounded-md p-2 text-left text-sm font-semibold text-white hover:bg-gray-900" aria-controls="sub-menu-1" aria-expanded="false">
                Pre Engagement
              </button>
              <ul class="mt-1 px-2 hidden" id="sub-menu-1">
                <li><a href="{{ route('livewire.pre-engagement.client-prospect-data') }}" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">Client Prospect Data</a></li>
                <li><a href="{{ route('livewire.pre-engagement.client-prospect-result') }}" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">Client Prospect Result</a></li>
                <li><a href="{{ route('livewire.pre-engagement.p-m-p-j') }}" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">PMPJ</a></li>
                <li><a href="{{ route('livewire.pre-engagement.ongoing-c-lient') }}" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">List Accepted Client</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div>
              <button type="button" class="flex w-full items-center gap-x-3 rounded-md p-2 text-left text-sm font-semibold text-white hover:bg-gray-900" aria-controls="sub-menu-2" aria-expanded="false">
                Risk Assessment
              </button>
              <ul class="mt-1 px-2 hidden" id="sub-menu-2">

                <li><a href="{{ route('livewire.risk-assessment.workflow-config') }}" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">Workflow Setting</a></li>
                <li><a href="{{ route('livewire.risk-assessment.client-configuration') }}" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">Client Configuration</a></li>
                <li><a href="{{ route('livewire.risk-assessment.materiality') }}" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">Materiality</a></li>
                <li><a href="{{ route('livewire.risk-assessment.inherent-risk') }}" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">Inherent Risk</a></li>
                <li><a href="{{ route('livewire.risk-assessment.control-risk') }}" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">Control Risk</a></li>
                <li><a href="{{ route('livewire.risk-assessment.analytical-procedures') }}" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">Analytical Procedures</a></li>
                <li><a href="{{ route('livewire.risk-assessment.romm') }}" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">RoMM</a></li>
                <li><a href="{{ route('livewire.risk-assessment.memorandum') }}" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">Audit Strategy Memorandum</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div>
              <button type="button" class="flex w-full items-center gap-x-3 rounded-md p-2 text-left text-sm font-semibold text-white hover:bg-gray-900" aria-controls="sub-menu-3" aria-expanded="false">
                Risk Responses
              </button>
              <ul class="mt-1 px-2 hidden" id="sub-menu-3">
                <li><a href="{{ route('livewire.risk-responses.ls0') }}" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">Lead & Sublead</a></li>
                <li><a href="{{ route('livewire.risk-responses.subsequent-event') }}" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">Subsequent Event</a></li>
                <li><a href="{{ route('livewire.risk-responses.related-party') }}" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">Related Party Transaction</a></li>
                <li><a href="{{ route('livewire.risk-responses.accounting-estimate') }}" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">Accounting Estimate</a></li>
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">Management Expert</a></li>
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">Auditor's Expert</a></li>
                <li><a href="{{ route('livewire.risk-responses.list-adjustment') }}" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">List Adjusment</a></li>
                <li><a href="{{ route('livewire.risk-responses.s-u-d') }}" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">Summary Unajusted Difference</a></li>
                <li><a href="{{ route('livewire.risk-responses.total-misstatement') }}" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">Total Misstatement</a></li>
                <li><a href="{{ route('livewire.risk-responses.audit-trial-balance') }}" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">Audit Trial Balance</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div>
              <button type="button" class="flex w-full items-center gap-x-3 rounded-md p-2 text-left text-sm font-semibold text-white hover:bg-gray-900" aria-controls="sub-menu-4" aria-expanded="false">
                Completing & Reporting
              </button>
              <ul class="mt-1 px-2 hidden" id="sub-menu-4">
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">QC Review</a></li>
                <li><a href="{{ route('livewire.completing.i-a-r-review') }}" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">IAR Review</a></li>
                <li><a href="{{ route('livewire.completing.i-a-r-final') }}" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">IAR Final</a></li>
              </ul>
            </div>
            <li>
            <div>
              <button type="button" class="flex w-full items-center gap-x-3 rounded-md p-2 text-left text-sm font-semibold text-white hover:bg-gray-900" aria-controls="sub-menu-5" aria-expanded="false">
                System Setting
              </button>
              <ul class="mt-1 px-2 hidden" id="sub-menu-5">
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">User Setting</a></li>
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-white hover:bg-gray-900">Admin Panel</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
    </div>

<script>
  // Toggle Submenu
  const menuButton = document.querySelectorAll('[aria-controls]');
  menuButton.forEach(button => {
    button.addEventListener('click', () => {
      const submenu = document.getElementById(button.getAttribute('aria-controls'));
      submenu.classList.toggle('hidden');
    });
  });
</script>
