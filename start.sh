docker run --rm -it \
    -p "8888:8888" \
    --workdir /usr/app \
    --volume "${PWD}/symfony":"/usr/app" \
    deptrac-demo_php \
    /bin/bash
