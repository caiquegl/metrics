/*const organizedAgenda = {};

const objAgent = [
    {
        data: "15/10/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "10:00",
        tipo: "normal",
        prioridade: "baixa",
    },
    {
        data: "15/10/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "-",
        tipo: "normal",
        prioridade: "baixa",
    },
    {
        data: "15/10/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "12:00",
        tipo: "normal",
        prioridade: "baixa",
    },
    {
        data: "16/10/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "-",
        tipo: "normal",
        prioridade: "baixa",
    },
    {
        data: "16/10/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "12:00",
        tipo: "normal",
        prioridade: "baixa",
    },
    {
        data: "16/10/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "14:00",
        tipo: "especial",
        prioridade: "baixa",
    },
    {
        data: "17/10/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "12:00",
        tipo: "normal",
        prioridade: "baixa",
    },
    {
        data: "17/10/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "-",
        tipo: "normal",
        prioridade: "baixa",
    },
    {
        data: "17/10/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "16:00",
        tipo: "normal",
        prioridade: "baixa",
    },
    {
        data: "18/10/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "12:00",
        tipo: "normal",
        prioridade: "baixa",
    },
    {
        data: "18/10/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "-",
        tipo: "normal",
        prioridade: "baixa",
    },
    {
        data: "18/10/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "-",
        tipo: "normal",
        prioridade: "baixa",
    },
    {
        data: "19/10/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "-",
        tipo: "normal",
        prioridade: "baixa",
    },
    {
        data: "19/10/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "16:00",
        tipo: "normal",
        prioridade: "baixa",
    },
    {
        data: "19/10/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "14:00",
        tipo: "normal",
        prioridade: "baixa",
    },
    {
        data: "20/10/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "12:00",
        tipo: "normal",
        prioridade: "baixa",
    },
    {
        data: "20/10/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "14:00",
        tipo: "normal",
        prioridade: "baixa",
    },
    {
        data: "20/10/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "15:00",
        tipo: "normal",
        prioridade: "baixa",
    },
    {
        data: "21/10/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "09:00",
        tipo: "normal",
        prioridade: "baixa",
    },
    {
        data: "21/10/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "10:00",
        tipo: "normal",
        prioridade: "baixa",
    },
    {
        data: "21/10/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "11:00",
        tipo: "normal",
        prioridade: "baixa",
    },
    {
        data: "21/11/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "12:00",
        tipo: "normal",
        prioridade: "baixa",
    },
    {
        data: "21/11/2023",
        titulo: "Eu sou um agendamento",
        descricao: "leren ipsun roem fks res pom",
        horario: "12:00",
        tipo: "normal",
        prioridade: "baixa",
    },
];

for (const agendamento of objAgent) {
    const date = agendamento.data;
    if (!organizedAgenda[date]) {
        organizedAgenda[date] = [];
    }
    organizedAgenda[date].push(agendamento);
}

function generateWeeklyCalendar() {
    container.innerHTML = "";
    const daysInWeek = 7;
    const dayNames = ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"];
    const monthNames = [
        "Janeiro",
        "Fevereiro",
        "Março",
        "Abril",
        "Maio",
        "Junho",
        "Julho",
        "Agosto",
        "Setembro",
        "Outubro",
        "Novembro",
        "Dezembro",
    ];

    document.getElementById("mouth").innerHTML =
        monthNames[currentDate.getMonth()] + " " + currentDate.getFullYear();

    for (let i = 0; i < daysInWeek; i++) {
        const day = new Date(currentDate);
        day.setDate(currentDate.getDate() - currentDate.getDay() + i);
        const dayDiv = document.createElement("div");
        dayDiv.classList.add("week2");

        const dayName = document.createElement("div");
        dayName.textContent = dayNames[i];
        dayDiv.appendChild(dayName);

        const dayNumber = document.createElement("div");
        dayNumber.textContent = day.getDate();
        dayDiv.appendChild(dayNumber);

        console.log(day.toLocaleDateString());
        if (organizedAgenda[day.toLocaleDateString()]) {
            const dayAgenda = document.createElement("div");
            dayAgenda.classList.add("agenda");
            organizedAgenda[day.toLocaleDateString()].forEach((agendamento) => {
                const agendaItem = document.createElement("div");
                agendaItem.textContent = agendamento.horario;
                agendaItem.classList.add(agendamento.tipo);
                dayAgenda.appendChild(agendaItem);
            });
            dayDiv.appendChild(dayAgenda);
        }

        container.appendChild(dayDiv);
    }
}

function previousWeek() {
    currentDate.setDate(currentDate.getDate() - 7);
    generateWeeklyCalendar();
}

function nextWeek() {
    currentDate.setDate(currentDate.getDate() + 7);
    generateWeeklyCalendar();
}

let currentDate = new Date();
const container = document.getElementById("calendar-container2");

if (container != undefined) generateWeeklyCalendar();*/
