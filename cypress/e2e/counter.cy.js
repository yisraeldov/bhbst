describe('template spec', () => {
    beforeEach(()=>{
	cy.visit('');
    })
    it('has counter', () => {
	cy.get('#counter')
    })
    it('has 0 count at start', () => {
	cy.get('#count').should('contain.text','0');
    })
    it('counts button clicks', () => {
	cy.get('button#click-me').click()
	cy.get('#count').should('contain.text','1');

	cy.get('button#click-me').click()
	cy.get('#count').should('contain.text','2');
    })
})
