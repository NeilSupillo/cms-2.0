function truncateText() {
  const textContainers = document.querySelectorAll(".text-container");
  const wordLimit = 10;

  textContainers.forEach((textContainer) => {
    const text = textContainer.textContent;

    if (text.trim().split(/\s+/).length > wordLimit) {
      const truncatedText =
        text.trim().split(/\s+/).slice(0, wordLimit).join(" ") + "...";
      textContainer.innerHTML = truncatedText;
    }
  });
}
truncateText();
