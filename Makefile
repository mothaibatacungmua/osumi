.PHONY: image
image:
	docker build -t osumi:latest -f Dockerfile .