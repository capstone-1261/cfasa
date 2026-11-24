// This script finds every .menu-item-has-children item WordPress generates, inserts a <button> right after the <a> tag, and handles clicks, desktop hover, and the Escape key:

document.addEventListener("DOMContentLoaded", () => {
	const nav = document.querySelector(".main-navigation");
	if (!nav) return;

	// 1. Mobile drawer toggle
	const mobileBtn = nav.querySelector(".menu-toggle");
	if (mobileBtn) {
		mobileBtn.addEventListener("click", () => {
			const isOpen = mobileBtn.getAttribute("aria-expanded") === "true";
			mobileBtn.setAttribute("aria-expanded", String(!isOpen));
			nav.classList.toggle("is-mobile-open", !isOpen);
		});
	}

	// 2. Inject accessible buttons into WordPress parent items
	const parentItems = nav.querySelectorAll(".menu-item-has-children");

	function closeAll(exceptLi = null) {
		parentItems.forEach((li) => {
			if (li !== exceptLi) {
				li.classList.remove("is-open");
				const btn = li.querySelector(".submenu-toggle");
				if (btn) btn.setAttribute("aria-expanded", "false");
			}
		});
	}

	parentItems.forEach((li, index) => {
		const link = li.querySelector(":scope > a");
		const submenu = li.querySelector(":scope > .sub-menu");
		if (!link || !submenu) return;

		const submenuId = submenu.id || `submenu-${index}`;
		submenu.id = submenuId;

		const btn = document.createElement("button");
		btn.type = "button";
		btn.className = "submenu-toggle";
		btn.setAttribute("aria-expanded", "false");
		btn.setAttribute("aria-controls", submenuId);
		btn.setAttribute("aria-label", `Toggle ${link.textContent.trim()} submenu`);
		btn.innerHTML = '<span aria-hidden="true">▾</span>';

		link.after(btn);

		// Click to toggle
		btn.addEventListener("click", () => {
			const isOpen = btn.getAttribute("aria-expanded") === "true";
			closeAll(li);
			btn.setAttribute("aria-expanded", String(!isOpen));
			li.classList.toggle("is-open", !isOpen);
		});

		// Desktop hover
		li.addEventListener("mouseenter", () => {
			if (window.innerWidth >= 900) {
				closeAll(li);
				btn.setAttribute("aria-expanded", "true");
				li.classList.add("is-open");
			}
		});

		li.addEventListener("mouseleave", () => {
			if (window.innerWidth >= 900) {
				btn.setAttribute("aria-expanded", "false");
				li.classList.remove("is-open");
			}
		});
	});

	// 3. Escape key & outside click
	nav.addEventListener("keydown", (e) => {
		if (e.key === "Escape") {
			const openLi = nav.querySelector("li.is-open");
			if (openLi) {
				const btn = openLi.querySelector(".submenu-toggle");
				closeAll();
				if (btn) btn.focus();
			} else if (nav.classList.contains("is-mobile-open") && mobileBtn) {
				mobileBtn.setAttribute("aria-expanded", "false");
				nav.classList.remove("is-mobile-open");
				mobileBtn.focus();
			}
		}
	});

	document.addEventListener("click", (e) => {
		if (!nav.contains(e.target)) closeAll();
	});
});
