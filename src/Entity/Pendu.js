class Pendu {
    constructor() {
        this.motSecret = this.choisirMot();
        this.lettresTrouvees = [];
        this.tentativesRestantes = 10;
        this.motMasqueElement = document.getElementById('mot-masque');
        this.lettresDevineesElement = document.getElementById('lettres-devinees');
        this.tentativesRestantesElement = document.getElementById('tentatives-restantes');
    }

    choisirMot() {
        const mots = ["chat", "soleil", "arbre", /* ... ajoutez d'autres mots ... */];
        return mots[Math.floor(Math.random() * mots.length)];
    }

    lettreExiste(lettre) {
        return this.motSecret.includes(lettre);
    }

    afficherMotMasque() {
        const motMasque = this.motSecret.split('').map(char => (this.lettresTrouvees.includes(char) ? char : '_')).join(' ');
        this.motMasqueElement.textContent = motMasque;
    }

    enleverTentativeSiFaux(lettre) {
        this.tentativesRestantes -= this.lettreExiste(lettre) ? 0 : 1;
    }

    verifierSiMotDecouvert() {
        return !this.motSecret.split('').some(char => !this.lettresTrouvees.includes(char));
    }

    verifierSiLettreDevinee(lettre) {
        return this.lettresTrouvees.includes(lettre);
    }

    reinitialiserJeu() {
        this.motSecret = this.choisirMot();
        this.lettresTrouvees = [];
        this.tentativesRestantes = 10;
        this.afficherMotMasque();
        this.lettresDevineesElement.textContent = '';
        this.tentativesRestantesElement.textContent = `Tentatives restantes : ${this.tentativesRestantes}`;
    }

    devinerLettre() {
        const lettreInput = document.getElementById('lettre-input');
        const lettre = lettreInput.value.toLowerCase();

        if (this.verifierSiLettreDevinee(lettre)) {
            alert('Vous avez déjà deviné cette lettre. Essayez-en une autre.');
            return;
        }

        this.lettresTrouvees.push(lettre);
        this.afficherMotMasque();
        this.enleverTentativeSiFaux(lettre);

        this.lettresDevineesElement.textContent = `Lettres déjà devinées : ${this.lettresTrouvees.join(', ')}`;
        this.tentativesRestantesElement.textContent = `Tentatives restantes : ${this.tentativesRestantes}`;

        if (this.verifierSiMotDecouvert()) {
            alert(`Félicitations ! Vous avez deviné le mot : ${this.motSecret}`);
            this.reinitialiserJeu();
        } else if (this.tentativesRestantes === 0) {
            alert(`Désolé, vous avez épuisé toutes vos tentatives. Le mot était : ${this.motSecret}`);
            this.reinitialiserJeu();
        }

        lettreInput.value = '';
    }
}

const jeuPendu = new Pendu();
